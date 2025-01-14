<?php $this->layout("./Template") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/home.css">
  <title>teste</title>
</head>

<body>
<div class="header-container-wrapper">
  <div class="header-container">
    <div class="custom-header-bg">
      <div class="page-center">
        <div class="logo">Conversor</div>
        <div class="navigation">
          <ul>
            <li><a href="#" class="button click-upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i>Upload</a></li>
            <li><a href="#" class="button open-progress"><i class="fa fa-tasks" aria-hidden="true"></i>Progresso</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="body-container-wrapper">
  <div class="body-container">
    <div class="page-center">
            
      <i class="fa fa-cloud" aria-hidden="true"></i>
      <h1>Faça upload dos seus <strong>arquivos</strong> em pdf.</h1>
      <a class="upload" id="call-to-action" onclick="document.querySelector('.upload-hidden').click();">
        <span>Escolha um arquivo pdf</span>
      </a>
      <form id="upload" method="POST" action="/upload" enctype="multipart/form-data">
        <div id="drop">
      <input type="file" name="upl" multiple class="upload-hidden" style="display:none;">
          </div>
        </form>
      <div class="file-upload-bar">
        <div class="bar-wrapper">
          <div class="overall"><span>Overall Progress</span>
            <div class="progress-bar-overall">
              <span><b>20%</b></span>
            </div>
          </div>
          <div class="individual-files">
            <ul>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
              <li>
                <span class="filename"><i>File Name:</i><b>xyz.jpg</b></span>
                <span class="filesize"><i>File Size:</i><b>Mb</b></span>
                <span class="file-link"><i>File Link</i><b><input value="http://www.qbus.com/txt.jpg"></b></span>
                <span class="copy-link"><b>Copy Link</b></span>
              </li>
            </ul>
            </div>
        </div>
      </div>
      <div class="file-upload-bar-closed"></div>
    </div>
  </div>
</div>

<div class="footer-container-wrapper">
  <div class="footer-container">
    <div class="custom-footer-bg">
      <div class="page-center">
        <p>@Copyright Qbus</p>
      </div>
    </div>
  </div>
</div>
</body>

</html>
<!DOCTYPE html>