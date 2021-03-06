<?php
    //------------------------------------
    // Verify Demo Module
    // created: June 2016
    // last modified: January 2016
    // author: Steve Rucker
    //------------------------------------

    $configs = include('../config.php');
?>
<html>
<html lang="en">

<head>
    <title>Kairos Verify Demo</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/verify.css">
    <link rel="stylesheet" href="css/verify-mediaqueries.css">
</head>
<body>
    <div class="main-container container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 left-image-container">
                <div class="canvas-container-left"></div>
                <div class="display-image-left-container">
                    <img id="image-left" src="https://media.kairos.com/demo/verify/george1.jpg" subjectId="george1" galleryId="verify-demo">
                </div>
                <div class="image-left-template"></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 right-image-container">
                <a href="" class="show-json">SHOW JSON</a>
                <div class="canvas-container-right"></div>
                <div class="display-image-right-container">
                    <img id="image-right" src="https://media.kairos.com/demo/verify/george2.jpg" subjectId="george2" galleryId="verify-demo">
                </div>
                <div class="image-right-template"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 json-response-container verify">
                <a href="" class="hide-json">HIDE JSON</a>
                <button class="copy-json-button btn btn-primary" data-clipboard-action="copy" data-clipboard-target=".json-response">COPY</button>
                <div class="json-response"><pre></pre></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 thumbnails container">
                <div class="image-group">
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/george1.jpg" subjectId="george1" galleryId="verify-demo" />
                    </a>
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/george2.jpg" subjectId="george2" galleryId="verify-demo" />
                    </a>
                    <span class="hover-title">GEORGE AND GEORGE</span>
                </div>
                <div class="image-group">
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/angelina1.jpg" subjectId="angelina1" galleryId="verify-demo" />
                    </a>
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/bradley1.jpg" subjectId="bradley1" galleryId="verify-demo" />
                    </a>
                    <span class="hover-title">ANGELINA AND BRADLEY</span>
                </div>
                <div class="image-group hidden-xs">
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/brad1.jpg" subjectId="brad1" galleryId="verify-demo" />
                    </a>
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/angelina2.jpg" subjectId="angelina2" galleryId="verify-demo" />
                    </a>
                    <span class="hover-title">BRAD AND ANGELINA</span>
                </div>
                <div class="image-group hidden-xs">
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/halle1.jpg" subjectId="halle1" galleryId="verify-demo" />
                    </a>
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/halle2.jpg" subjectId="halle2" galleryId="verify-demo" />
                    </a>
                    <span class="hover-title">HALLE AND HALLE</span>
                </div>
                <div class="image-group hidden-xs hidden-sm">
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/bradley2.jpg" subjectId="bradley2" galleryId="verify-demo" />
                    </a>
                    <a href="" class="photo-thumbnail">
                        <img src="https://media.kairos.com/demo/verify/brad2.jpg" subjectId="brad2" galleryId="verify-demo" />
                    </a>
                    <span class="hover-title">BRADLEY AND BRAD</span>
                </div>
            </div>
        </div>
        <div class="row ui-buttons">
            <div class="col-md-12">
                <div class="upload col-xs-6 col-sm-6 col-md-6">
                    <form method="post" enctype="multipart/form-data" id="mediaUploadForm-left" class="upload-form"> 
                        <div class="upload-button btn btn-kairos">UPLOAD<input type="file" id="upload-left" name="upload-left"></div>
                    </form>
                    <div id="uploadErrorLeft"></div>
                </div>
                <div class="mask upload-mask-left"></div>
                <div class="upload col-xs-6 col-sm-6 col-md-6">
                    <form method="post" enctype="multipart/form-data" id="mediaUploadForm-right" class="upload-form"> 
                        <div class="upload-button btn btn-kairos">UPLOAD<input type="file" id="upload-right" name="upload-right"></div>
                    </form>
                    <div id="uploadErrorRight"></div>
                </div>
                <div class="mask upload-mask-right"></div>
            </div>
        </div>
        <div class="row ui-buttons">
            <div class="col-md-12">
                <div class="url col-xs-3 col-sm-4 col-md-4">
                    <input type="text" class="url-from-web" id="url-left" value="URL from the web" />
                    <div class="url-error error-left"></div>
                </div>
                <div class="submit col-xs-3 col-sm-2 col-md-2">
                    <button class="submit-button btn btn-kairos" id="submit-left">SUBMIT</button>
                </div>
                <div class="mask url-mask-left"></div>
                <div class="url col-xs-3 col-sm-4 col-md-4">
                    <input type="text" class="url-from-web" id="url-right" value="URL from the web" />
                    <div class="url-error error-right"></div>
                </div>
                <div class="submit col-xs-3 col-sm-2 col-md-2">
                    <button class="submit-button btn btn-kairos" id="submit-right">SUBMIT</button>
                </div>
                <div class="mask url-mask-right"></div>
            </div>
        </div>
    </div>  

    <script id="image-left-template" type="text/x-handlebars-template">
        <div class="header-bkg-left"></div>
        <div class="message-container">
            {{#if spinner}}
                <div class="processing-spinner"></div>
                <div class="spinner-message">{{message}}</div>
            {{else}}
                <div class="message">{{message}}</div>
            {{/if}}
        </div>
    </script>
    <script id="image-right-template" type="text/x-handlebars-template">
        <div class="header-bkg-right"></div>
        <div class="message-container">
            {{#if spinner}}
                <div class="processing-spinner"></div>
                <div class="spinner-message">{{message}}</div>
            {{else}}
                <div class="message">{{message}}</div>
            {{/if}}
        </div>
        {{#if response}}
            <div class="verify-response"></div>
        {{/if}}
    </script>
            

    <!-- hosted libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- custom libraries -->
    <script src="../js/utils.js"></script>
    <script src="js/verifyDemoApp.js"></script>
    <script src="js/verifyUi.js"></script>
    <script src="js/imageData.js"></script>
    <script src="js/imageAnalysisData.js"></script>
    <script src="js/jsonData.js"></script>
    <script src="../js/exif.js"></script>
    <script src="../js/transparentImageData.js"></script>
    
    <!-- initialize custom libraries if API credentials are valid -->
    <?php
        if (
            (defined("APP_ID") && APP_ID != "") &&
            (defined("APP_KEY") && APP_KEY != "") &&
            (defined("API_URL") && API_URL != "")
        ) {
    ?>
        <script>
            verifyDemoApp.init({
                "uploadFileSizeImage":<?php echo $configs["uploadFileSizeImage"] ?>,
                "uploadFileTypesImage":<?php echo $configs["uploadFileTypesImage"] ?>,
                "apiCredentials":true
            });
        </script>
    <?php
        }
        else {
    ?>
        <script>
            verifyDemoApp.init({
                "apiCredentials":false
            });
        </script>
    <?php
        }
    ?>

</body>

</html>
