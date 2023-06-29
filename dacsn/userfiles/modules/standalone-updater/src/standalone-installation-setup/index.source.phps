<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="//code.jquery.com/jquery-1.11.3.js"></script>

    <title>Standalone Update</title>

  </head>
  <body>

  <script type="text/javascript">
    $(document).ready(function() {

        $('.js-update-log').html('Loading...');

        // Check is started
        $.get("actions.php?isStarted=1&format=json", function(data) {
            if (data.started) {
                // If is started we want to read log file
                $.get("actions.php?getLogfile=1&format=json", function(data) {
                    readLog(data.logfile);
                });
            } else {
                // else not started we want to start the process
                $.get("actions.php?startSession=1&format=json&installVersion=<?php echo $_GET['installVersion']; ?>", function(data) {
                   // and now we can read log
                    $.get("actions.php?getLogfile=1&format=json", function(data) {
                        readLog(data.logfile);
                    });
                    // Start updating
                    setTimeout(function() {
                    $.get("actions.php?startUpdating=1&format=json", function(data) {
                        if (data.updating.downloaded) {
             /*               $.get("actions.php?unzippAppGetNumberOfStepsNeeded=1&format=json", function (data) {
                                    if (data.unzipping.unzip_steps_needed) {
                                        execUnzipChunkStepsAjax(data.unzipping.unzip_steps_needed)
                                    } else {
                                        $('.js-update-log').html("Cannot open the zip with updates file.");
                                    }
                            });
*/
                            preventWindowClose = true;

                         //   startUnzipAjaxOnSingleStep();
                            startUnzipAjaxOnMultiSteps();


                          // $.get("actions.php?unzippApp=1&format=json", function (data) {
                          //       if (data.unzipping.unzipped) {
                          //           $.get("actions.php?replaceFilesPrepareStepsNeeded=1&format=json", function (data) {
                          //               if (data.replace_steps.steps_needed) {
                          //                   execReplaceStepsAjax(data.replace_steps.steps_needed)
                          //               } else {
                          //                   $('.js-update-log').html("Can't prepare replace steps.");
                          //               }
                          //
                          //           });
                          //       } else {
                          //           $('.js-update-log').html("Can't unzip the app.");
                          //       }
                          //   });





                        } else {
                            $('.js-update-log').html("Can't download the app.");
                        }
                    });
                    }, 800);
                });
            }
        });
    });

    function execCleanupStepAjax() {
          $.get('actions.php?replaceFilesExecCleanupStep=1&format=json', function(data) {

        });
    }

    function startUnzipAjaxOnSingleStep() {
        $.get("actions.php?unzippApp=1&format=json", function (data) {
            if (data.unzipping.unzipped) {
                $.get("actions.php?replaceFilesPrepareStepsNeeded=1&format=json", function (data) {
                    if (data.replace_steps.steps_needed) {
                        execReplaceStepsAjax(data.replace_steps.steps_needed)
                    } else {
                        $('.js-update-log').html("Can't prepare replace steps.");
                    }

                });
            } else {
                $('.js-update-log').html("Can't unzip the app.");
            }
        });

    }

    function startUnzipAjaxOnMultiSteps() {
        $.get("actions.php?unzippAppGetNumberOfStepsNeeded=1&format=json", function (data) {
            if (data.unzipping.unzip_steps_needed) {
                execUnzipChunkStepsAjax(data.unzipping.unzip_steps_needed)
            } else {
                $('.js-update-log').html("Cannot open the zip with updates file.");
            }
        });

    }



    function execUnzipChunkStepsAjax(numsteps, step) {
        if (typeof step === 'undefined') {
            step = 0;
        }

        if (step > numsteps) {
            return;
        }

        $('.js-updating-the-software-text').html("Executing unzip step " + step + " of " + numsteps);




        $.ajax({
            url: 'actions.php?unzipAppExecStep=' + step + '&format=json',
            type: 'GET',
            data: {
                format: 'json'
            },


            cache: false,

            success: function (data2) {
                if (data2 && data2.unzipping && data2.unzipping.unzip_step_executed) {
                    if (parseInt(data2.unzipping.unzip_step_executed) >= parseInt(numsteps)) {


                        setTimeout(function () {
                            $('.blob').fadeOut();
                            $('.js-updating-the-software-text').html('Unziping is done. Now we will replace files.');
                            $('.js-update-log').html("Preparing to replace files...");


                            $.get("actions.php?replaceFilesPrepareStepsNeeded=1&format=json", function (data) {
                                if (data.replace_steps.steps_needed) {
                                    execReplaceStepsAjax(data.replace_steps.steps_needed)
                                } else {
                                    $('.js-update-log').html("Can't prepare replace steps.");
                                }

                            });

                         }, 200);
                    }

                }
            },
            complete: function (data2) {
                // step++;
                // execUnzipChunkStepsAjax(numsteps, step)
            }
        }).done(function() {
            step++;
            execUnzipChunkStepsAjax(numsteps, step)
        });

    }



      function execReplaceStepsAjax(numsteps, step) {
        if (typeof step === 'undefined') {
            step = 0;
        }

        if (step > numsteps) {
            return;
        }

        //   for (let step = 0; step < numsteps; step++) {

        $('.js-updating-the-software-text').html("Executing replace step " + step + " of " + numsteps);

          $.ajax({
            url: 'actions.php?replaceFilesExecStep='+step+'&format=json',
            type: 'GET',

            data: {
                replaceFilesExecStep: step,
                format: 'json'
            },

            success: function (data2) {
                if (data2.replace_step_result.step_executed) {
                    if(parseInt(data2.replace_step_result.step_executed) >= parseInt(numsteps)) {

                    if(typeof readlogInterval !== 'undefined') {
                        clearInterval(readlogInterval);
                    }
                        // setTimeout(function () {
                        //   //  execCleanupStepAjax()
                        // }, 15000);
                     setTimeout(function () {
                         $('.blob').fadeOut();
                         preventWindowClose = false;
                         $('.js-updating-the-software-text').html('Done!');
                         $('.js-update-log').html("You can visit your site now.");
                         $('.js-update-log').append("<br><br><a class='mw-standalone-text' href='../../../'>Continue</a>");
                      }, 1000);
                    }

                }
            },
            complete: function (data2) {
                // step++;
                //
                // execReplaceStepsAjax(numsteps, step)
                //
                // if(step >= numsteps) {
                //     setTimeout(function () {
                //         //    execCleanupStepAjax()
                //     }, 15000);
                // }
             }
        }).done(function() {
              var shouldClean = false;
              if(step >= numsteps) {
                  var shouldClean = true;
              }
              step++;

              execReplaceStepsAjax(numsteps, step)

              if(shouldClean) {
                  setTimeout(function () {
                        execCleanupStepAjax()
                  }, 7000);
              }
          });

        //  }
    }

    function readLog(logfile)
    {
       readlogInterval = setInterval(function () {
            $.get(logfile, function (log) {
                try {
                    var jsonLogStatus = JSON.parse(log);
                    if (jsonLogStatus.success) {
                       $('.blob').fadeOut();
                        $('.js-updating-the-software-text').html('Done!');
                        preventWindowClose = false;
                        clearInterval(readlogInterval);
                        $('.js-update-log').html(jsonLogStatus.message);
                    }
                } catch(err) {
                    log = log.replace(/(?:\r\n|\r|\n)/g, '<br>');
                    $('.js-update-log').html(log);
                }
            });
        }, 700);
    }

    preventWindowClose = false;


    window.addEventListener('beforeunload', e => {
        if (!preventWindowClose) return;
        // Cancel the event
        e.preventDefault();
        // Chrome requires returnValue to be set
        e.returnValue = '';
    });


  </script>


<style>
    .mw-standalone-loading {
        background-color:#4592ff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    svg {
        position: fixed;
    }

    .mw-standalone-text h4, h6, a.mw-standalone-text{
        color: #ffffff;
    }

    .blobs {
        filter: url(#goo);
        width: 300px;
        height: 150px;
        position: relative;
        overflow: hidden;
        border-radius: 70px;
        transform-style: preserve-3d;
    }
    .blobs .blob-center {
        transform-style: preserve-3d;
        position: absolute;
        background: #FFFFFF;
        top: 50%;
        left: 50%;
        width: 30px;
        height: 30px;
        transform-origin: left top;
        transform: scale(0.9) translate(-50%, -50%);
        -webkit-animation: blob-grow linear 3.4s infinite;
        animation: blob-grow linear 3.4s infinite;
        border-radius: 50%;
        box-shadow: 0 -10px 40px -5px #FFFFFF;
    }

    .blob {
        position: absolute;
        background: #FFFFFF;
        top: 50%;
        left: 50%;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        -webkit-animation: blobs ease-out 3.4s infinite;
        animation: blobs ease-out 3.4s infinite;
        transform: scale(0.9) translate(-50%, -50%);
        transform-origin: center top;
        opacity: 0;
    }
    .blob:nth-child(1) {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }
    .blob:nth-child(2) {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }
    .blob:nth-child(3) {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }
    .blob:nth-child(4) {
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }
    .blob:nth-child(5) {
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    @-webkit-keyframes blobs {
        0% {
            opacity: 0;
            transform: scale(0) translate(calc(-330px - 50%), -50%);
        }
        1% {
            opacity: 1;
        }
        35%, 65% {
            opacity: 1;
            transform: scale(0.9) translate(-50%, -50%);
        }
        99% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: scale(0) translate(calc(330px - 50%), -50%);
        }
    }

    @keyframes blobs {
        0% {
            opacity: 0;
            transform: scale(0) translate(calc(-330px - 50%), -50%);
        }
        1% {
            opacity: 1;
        }
        35%, 65% {
            opacity: 1;
            transform: scale(0.9) translate(-50%, -50%);
        }
        99% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: scale(0) translate(calc(330px - 50%), -50%);
        }
    }
    @-webkit-keyframes blob-grow {
        0%, 39% {
            transform: scale(0) translate(-50%, -50%);
        }
        40%, 42% {
            transform: scale(1, 0.9) translate(-50%, -50%);
        }
        43%, 44% {
            transform: scale(1.2, 1.1) translate(-50%, -50%);
        }
        45%, 46% {
            transform: scale(1.3, 1.2) translate(-50%, -50%);
        }
        47%, 48% {
            transform: scale(1.4, 1.3) translate(-50%, -50%);
        }
        52% {
            transform: scale(1.5, 1.4) translate(-50%, -50%);
        }
        54% {
            transform: scale(1.7, 1.6) translate(-50%, -50%);
        }
        58% {
            transform: scale(1.8, 1.7) translate(-50%, -50%);
        }
        68%, 70% {
            transform: scale(1.7, 1.5) translate(-50%, -50%);
        }
        78% {
            transform: scale(1.6, 1.4) translate(-50%, -50%);
        }
        80%, 81% {
            transform: scale(1.5, 1.4) translate(-50%, -50%);
        }
        82%, 83% {
            transform: scale(1.4, 1.3) translate(-50%, -50%);
        }
        84%, 85% {
            transform: scale(1.3, 1.2) translate(-50%, -50%);
        }
        86%, 87% {
            transform: scale(1.2, 1.1) translate(-50%, -50%);
        }
        90%, 91% {
            transform: scale(1, 0.9) translate(-50%, -50%);
        }
        92%, 100% {
            transform: scale(0) translate(-50%, -50%);
        }
    }
    @keyframes blob-grow {
        0%, 39% {
            transform: scale(0) translate(-50%, -50%);
        }
        40%, 42% {
            transform: scale(1, 0.9) translate(-50%, -50%);
        }
        43%, 44% {
            transform: scale(1.2, 1.1) translate(-50%, -50%);
        }
        45%, 46% {
            transform: scale(1.3, 1.2) translate(-50%, -50%);
        }
        47%, 48% {
            transform: scale(1.4, 1.3) translate(-50%, -50%);
        }
        52% {
            transform: scale(1.5, 1.4) translate(-50%, -50%);
        }
        54% {
            transform: scale(1.7, 1.6) translate(-50%, -50%);
        }
        58% {
            transform: scale(1.8, 1.7) translate(-50%, -50%);
        }
        68%, 70% {
            transform: scale(1.7, 1.5) translate(-50%, -50%);
        }
        78% {
            transform: scale(1.6, 1.4) translate(-50%, -50%);
        }
        80%, 81% {
            transform: scale(1.5, 1.4) translate(-50%, -50%);
        }
        82%, 83% {
            transform: scale(1.4, 1.3) translate(-50%, -50%);
        }
        84%, 85% {
            transform: scale(1.3, 1.2) translate(-50%, -50%);
        }
        86%, 87% {
            transform: scale(1.2, 1.1) translate(-50%, -50%);
        }
        90%, 91% {
            transform: scale(1, 0.9) translate(-50%, -50%);
        }
        92%, 100% {
            transform: scale(0) translate(-50%, -50%);
        }
    }
</style>
<div class="mw-standalone-loading">
    <div class="row flex-column align-items-center">
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
        <div class="mw-standalone-text p-5 text-center">
            <h4 class="mb-2 js-updating-the-software-text">Updating the software</h4>
            <h6 class="js-update-log">Loading...</h6>
        </div>
    </div>
</div>

  </body>
</html>
