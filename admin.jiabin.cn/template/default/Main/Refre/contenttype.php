<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <style>
        .titcolor{ background-color:#f5f5f5;}
    </style>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'contenttype'; include(__DIR__.'/tablist.php');?>

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            HTTP Mime-Type对照表 : Content-Type（Mime-Type） 文件扩展名 <code>窍门：Ctrl+F 快速查找 Mime-Type类型</code>
        </div>

        <div class="panel panel-success">
            <table width="100%" class="table table-bordered table-hover">
                <tbody>
                <tr>
                    <th class="titcolor">
                        文件扩展名
                    </th>
                    <th class="titcolor">
                        Content-Type(Mime-Type)
                    </th>
                    <th class="titcolor">
                        文件扩展名
                    </th>
                    <th class="titcolor">
                        Content-Type(Mime-Type)
                    </th>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <td class="titcolor">
                        .*（ 二进制流，不知道下载文件类型）
                    </td>
                    <td>
                        application/octet-stream
                    </td>
                    <td class="titcolor">
                        .tif
                    </td>
                    <td>
                        image/tiff
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .001
                    </td>
                    <td>
                        application/x-001
                    </td>
                    <td class="titcolor">
                        .301
                    </td>
                    <td>
                        application/x-301
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .323
                    </td>
                    <td>
                        text/h323
                    </td>
                    <td class="titcolor">
                        .906
                    </td>
                    <td>
                        application/x-906
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .907
                    </td>
                    <td>
                        drawing/907
                    </td>
                    <td class="titcolor">
                        .a11
                    </td>
                    <td>
                        application/x-a11
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .acp
                    </td>
                    <td>
                        audio/x-mei-aac
                    </td>
                    <td class="titcolor">
                        .ai
                    </td>
                    <td>
                        application/postscript
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .aif
                    </td>
                    <td>
                        audio/aiff
                    </td>
                    <td class="titcolor">
                        .aifc
                    </td>
                    <td>
                        audio/aiff
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .aiff
                    </td>
                    <td>
                        audio/aiff
                    </td>
                    <td class="titcolor">
                        .anv
                    </td>
                    <td>
                        application/x-anv
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .asa
                    </td>
                    <td>
                        text/asa
                    </td>
                    <td class="titcolor">
                        .asf
                    </td>
                    <td>
                        video/x-ms-asf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .asp
                    </td>
                    <td>
                        text/asp
                    </td>
                    <td class="titcolor">
                        .asx
                    </td>
                    <td>
                        video/x-ms-asf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .au
                    </td>
                    <td>
                        audio/basic
                    </td>
                    <td class="titcolor">
                        .avi
                    </td>
                    <td>
                        video/avi
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .awf
                    </td>
                    <td>
                        application/vnd.adobe.workflow
                    </td>
                    <td class="titcolor">
                        .biz
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .bmp
                    </td>
                    <td>
                        application/x-bmp
                    </td>
                    <td class="titcolor">
                        .bot
                    </td>
                    <td>
                        application/x-bot
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .c4t
                    </td>
                    <td>
                        application/x-c4t
                    </td>
                    <td class="titcolor">
                        .c90
                    </td>
                    <td>
                        application/x-c90
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cal
                    </td>
                    <td>
                        application/x-cals
                    </td>
                    <td class="titcolor">
                        .cat
                    </td>
                    <td>
                        application/vnd.ms-pki.seccat
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cdf
                    </td>
                    <td>
                        application/x-netcdf
                    </td>
                    <td class="titcolor">
                        .cdr
                    </td>
                    <td>
                        application/x-cdr
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cel
                    </td>
                    <td>
                        application/x-cel
                    </td>
                    <td class="titcolor">
                        .cer
                    </td>
                    <td>
                        application/x-x509-ca-cert
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cg4
                    </td>
                    <td>
                        application/x-g4
                    </td>
                    <td class="titcolor">
                        .cgm
                    </td>
                    <td>
                        application/x-cgm
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cit
                    </td>
                    <td>
                        application/x-cit
                    </td>
                    <td class="titcolor">
                        .class
                    </td>
                    <td>
                        java/*
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cml
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .cmp
                    </td>
                    <td>
                        application/x-cmp
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cmx
                    </td>
                    <td>
                        application/x-cmx
                    </td>
                    <td class="titcolor">
                        .cot
                    </td>
                    <td>
                        application/x-cot
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .crl
                    </td>
                    <td>
                        application/pkix-crl
                    </td>
                    <td class="titcolor">
                        .crt
                    </td>
                    <td>
                        application/x-x509-ca-cert
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .csi
                    </td>
                    <td>
                        application/x-csi
                    </td>
                    <td class="titcolor">
                        .css
                    </td>
                    <td>
                        text/css
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .cut
                    </td>
                    <td>
                        application/x-cut
                    </td>
                    <td class="titcolor">
                        .dbf
                    </td>
                    <td>
                        application/x-dbf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dbm
                    </td>
                    <td>
                        application/x-dbm
                    </td>
                    <td class="titcolor">
                        .dbx
                    </td>
                    <td>
                        application/x-dbx
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dcd
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .dcx
                    </td>
                    <td>
                        application/x-dcx
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .der
                    </td>
                    <td>
                        application/x-x509-ca-cert
                    </td>
                    <td class="titcolor">
                        .dgn
                    </td>
                    <td>
                        application/x-dgn
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dib
                    </td>
                    <td>
                        application/x-dib
                    </td>
                    <td class="titcolor">
                        .dll
                    </td>
                    <td>
                        application/x-msdownload
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .doc
                    </td>
                    <td>
                        application/msword
                    </td>
                    <td class="titcolor">
                        .dot
                    </td>
                    <td>
                        application/msword
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .drw
                    </td>
                    <td>
                        application/x-drw
                    </td>
                    <td class="titcolor">
                        .dtd
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dwf
                    </td>
                    <td>
                        Model/vnd.dwf
                    </td>
                    <td class="titcolor">
                        .dwf
                    </td>
                    <td>
                        application/x-dwf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dwg
                    </td>
                    <td>
                        application/x-dwg
                    </td>
                    <td class="titcolor">
                        .dxb
                    </td>
                    <td>
                        application/x-dxb
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .dxf
                    </td>
                    <td>
                        application/x-dxf
                    </td>
                    <td class="titcolor">
                        .edn
                    </td>
                    <td>
                        application/vnd.adobe.edn
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .emf
                    </td>
                    <td>
                        application/x-emf
                    </td>
                    <td class="titcolor">
                        .eml
                    </td>
                    <td>
                        message/rfc822
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ent
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .epi
                    </td>
                    <td>
                        application/x-epi
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .eps
                    </td>
                    <td>
                        application/x-ps
                    </td>
                    <td class="titcolor">
                        .eps
                    </td>
                    <td>
                        application/postscript
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .etd
                    </td>
                    <td>
                        application/x-ebx
                    </td>
                    <td class="titcolor">
                        .exe
                    </td>
                    <td>
                        application/x-msdownload
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .fax
                    </td>
                    <td>
                        image/fax
                    </td>
                    <td class="titcolor">
                        .fdf
                    </td>
                    <td>
                        application/vnd.fdf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .fif
                    </td>
                    <td>
                        application/fractals
                    </td>
                    <td class="titcolor">
                        .fo
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .frm
                    </td>
                    <td>
                        application/x-frm
                    </td>
                    <td class="titcolor">
                        .g4
                    </td>
                    <td>
                        application/x-g4
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .gbr
                    </td>
                    <td>
                        application/x-gbr
                    </td>
                    <td class="titcolor">
                        .
                    </td>
                    <td>
                        application/x-
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .gif
                    </td>
                    <td>
                        image/gif
                    </td>
                    <td class="titcolor">
                        .gl2
                    </td>
                    <td>
                        application/x-gl2
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .gp4
                    </td>
                    <td>
                        application/x-gp4
                    </td>
                    <td class="titcolor">
                        .hgl
                    </td>
                    <td>
                        application/x-hgl
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .hmr
                    </td>
                    <td>
                        application/x-hmr
                    </td>
                    <td class="titcolor">
                        .hpg
                    </td>
                    <td>
                        application/x-hpgl
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .hpl
                    </td>
                    <td>
                        application/x-hpl
                    </td>
                    <td class="titcolor">
                        .hqx
                    </td>
                    <td>
                        application/mac-binhex40
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .hrf
                    </td>
                    <td>
                        application/x-hrf
                    </td>
                    <td class="titcolor">
                        .hta
                    </td>
                    <td>
                        application/hta
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .htc
                    </td>
                    <td>
                        text/x-component
                    </td>
                    <td class="titcolor">
                        .htm
                    </td>
                    <td>
                        text/html
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .html
                    </td>
                    <td>
                        text/html
                    </td>
                    <td class="titcolor">
                        .htt
                    </td>
                    <td>
                        text/webviewhtml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .htx
                    </td>
                    <td>
                        text/html
                    </td>
                    <td class="titcolor">
                        .icb
                    </td>
                    <td>
                        application/x-icb
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ico
                    </td>
                    <td>
                        image/x-icon
                    </td>
                    <td class="titcolor">
                        .ico
                    </td>
                    <td>
                        application/x-ico
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .iff
                    </td>
                    <td>
                        application/x-iff
                    </td>
                    <td class="titcolor">
                        .ig4
                    </td>
                    <td>
                        application/x-g4
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .igs
                    </td>
                    <td>
                        application/x-igs
                    </td>
                    <td class="titcolor">
                        .iii
                    </td>
                    <td>
                        application/x-iphone
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .img
                    </td>
                    <td>
                        application/x-img
                    </td>
                    <td class="titcolor">
                        .ins
                    </td>
                    <td>
                        application/x-internet-signup
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .isp
                    </td>
                    <td>
                        application/x-internet-signup
                    </td>
                    <td class="titcolor">
                        .IVF
                    </td>
                    <td>
                        video/x-ivf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .java
                    </td>
                    <td>
                        java/*
                    </td>
                    <td class="titcolor">
                        .jfif
                    </td>
                    <td>
                        image/jpeg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .jpe
                    </td>
                    <td>
                        image/jpeg
                    </td>
                    <td class="titcolor">
                        .jpe
                    </td>
                    <td>
                        application/x-jpe
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .jpeg
                    </td>
                    <td>
                        image/jpeg
                    </td>
                    <td class="titcolor">
                        .jpg
                    </td>
                    <td>
                        image/jpeg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .jpg
                    </td>
                    <td>
                        application/x-jpg
                    </td>
                    <td class="titcolor">
                        .js
                    </td>
                    <td>
                        application/x-javascript
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .jsp
                    </td>
                    <td>
                        text/html
                    </td>
                    <td class="titcolor">
                        .la1
                    </td>
                    <td>
                        audio/x-liquid-file
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .lar
                    </td>
                    <td>
                        application/x-laplayer-reg
                    </td>
                    <td class="titcolor">
                        .latex
                    </td>
                    <td>
                        application/x-latex
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .lavs
                    </td>
                    <td>
                        audio/x-liquid-secure
                    </td>
                    <td class="titcolor">
                        .lbm
                    </td>
                    <td>
                        application/x-lbm
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .lmsff
                    </td>
                    <td>
                        audio/x-la-lms
                    </td>
                    <td class="titcolor">
                        .ls
                    </td>
                    <td>
                        application/x-javascript
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ltr
                    </td>
                    <td>
                        application/x-ltr
                    </td>
                    <td class="titcolor">
                        .m1v
                    </td>
                    <td>
                        video/x-mpeg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .m2v
                    </td>
                    <td>
                        video/x-mpeg
                    </td>
                    <td class="titcolor">
                        .m3u
                    </td>
                    <td>
                        audio/mpegurl
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .m4e
                    </td>
                    <td>
                        video/mpeg4
                    </td>
                    <td class="titcolor">
                        .mac
                    </td>
                    <td>
                        application/x-mac
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .man
                    </td>
                    <td>
                        application/x-troff-man
                    </td>
                    <td class="titcolor">
                        .math
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mdb
                    </td>
                    <td>
                        application/msaccess
                    </td>
                    <td class="titcolor">
                        .mdb
                    </td>
                    <td>
                        application/x-mdb
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mfp
                    </td>
                    <td>
                        application/x-shockwave-flash
                    </td>
                    <td class="titcolor">
                        .mht
                    </td>
                    <td>
                        message/rfc822
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mhtml
                    </td>
                    <td>
                        message/rfc822
                    </td>
                    <td class="titcolor">
                        .mi
                    </td>
                    <td>
                        application/x-mi
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mid
                    </td>
                    <td>
                        audio/mid
                    </td>
                    <td class="titcolor">
                        .midi
                    </td>
                    <td>
                        audio/mid
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mil
                    </td>
                    <td>
                        application/x-mil
                    </td>
                    <td class="titcolor">
                        .mml
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mnd
                    </td>
                    <td>
                        audio/x-musicnet-download
                    </td>
                    <td class="titcolor">
                        .mns
                    </td>
                    <td>
                        audio/x-musicnet-stream
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mocha
                    </td>
                    <td>
                        application/x-javascript
                    </td>
                    <td class="titcolor">
                        .movie
                    </td>
                    <td>
                        video/x-sgi-movie
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mp1
                    </td>
                    <td>
                        audio/mp1
                    </td>
                    <td class="titcolor">
                        .mp2
                    </td>
                    <td>
                        audio/mp2
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mp2v
                    </td>
                    <td>
                        video/mpeg
                    </td>
                    <td class="titcolor">
                        .mp3
                    </td>
                    <td>
                        audio/mp3
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mp4
                    </td>
                    <td>
                        video/mpeg4
                    </td>
                    <td class="titcolor">
                        .mpa
                    </td>
                    <td>
                        video/x-mpg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mpd
                    </td>
                    <td>
                        application/vnd.ms-project
                    </td>
                    <td class="titcolor">
                        .mpe
                    </td>
                    <td>
                        video/x-mpeg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mpeg
                    </td>
                    <td>
                        video/mpg
                    </td>
                    <td class="titcolor">
                        .mpg
                    </td>
                    <td>
                        video/mpg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mpga
                    </td>
                    <td>
                        audio/rn-mpeg
                    </td>
                    <td class="titcolor">
                        .mpp
                    </td>
                    <td>
                        application/vnd.ms-project
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mps
                    </td>
                    <td>
                        video/x-mpeg
                    </td>
                    <td class="titcolor">
                        .mpt
                    </td>
                    <td>
                        application/vnd.ms-project
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mpv
                    </td>
                    <td>
                        video/mpg
                    </td>
                    <td class="titcolor">
                        .mpv2
                    </td>
                    <td>
                        video/mpeg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mpw
                    </td>
                    <td>
                        application/vnd.ms-project
                    </td>
                    <td class="titcolor">
                        .mpx
                    </td>
                    <td>
                        application/vnd.ms-project
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .mtx
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .mxp
                    </td>
                    <td>
                        application/x-mmxp
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .net
                    </td>
                    <td>
                        image/pnetvue
                    </td>
                    <td class="titcolor">
                        .nrf
                    </td>
                    <td>
                        application/x-nrf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .nws
                    </td>
                    <td>
                        message/rfc822
                    </td>
                    <td class="titcolor">
                        .odc
                    </td>
                    <td>
                        text/x-ms-odc
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .out
                    </td>
                    <td>
                        application/x-out
                    </td>
                    <td class="titcolor">
                        .p10
                    </td>
                    <td>
                        application/pkcs10
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .p12
                    </td>
                    <td>
                        application/x-pkcs12
                    </td>
                    <td class="titcolor">
                        .p7b
                    </td>
                    <td>
                        application/x-pkcs7-certificates
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .p7c
                    </td>
                    <td>
                        application/pkcs7-mime
                    </td>
                    <td class="titcolor">
                        .p7m
                    </td>
                    <td>
                        application/pkcs7-mime
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .p7r
                    </td>
                    <td>
                        application/x-pkcs7-certreqresp
                    </td>
                    <td class="titcolor">
                        .p7s
                    </td>
                    <td>
                        application/pkcs7-signature
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pc5
                    </td>
                    <td>
                        application/x-pc5
                    </td>
                    <td class="titcolor">
                        .pci
                    </td>
                    <td>
                        application/x-pci
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pcl
                    </td>
                    <td>
                        application/x-pcl
                    </td>
                    <td class="titcolor">
                        .pcx
                    </td>
                    <td>
                        application/x-pcx
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pdf
                    </td>
                    <td>
                        application/pdf
                    </td>
                    <td class="titcolor">
                        .pdf
                    </td>
                    <td>
                        application/pdf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pdx
                    </td>
                    <td>
                        application/vnd.adobe.pdx
                    </td>
                    <td class="titcolor">
                        .pfx
                    </td>
                    <td>
                        application/x-pkcs12
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pgl
                    </td>
                    <td>
                        application/x-pgl
                    </td>
                    <td class="titcolor">
                        .pic
                    </td>
                    <td>
                        application/x-pic
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pko
                    </td>
                    <td>
                        application/vnd.ms-pki.pko
                    </td>
                    <td class="titcolor">
                        .pl
                    </td>
                    <td>
                        application/x-perl
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .plg
                    </td>
                    <td>
                        text/html
                    </td>
                    <td class="titcolor">
                        .pls
                    </td>
                    <td>
                        audio/scpls
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .plt
                    </td>
                    <td>
                        application/x-plt
                    </td>
                    <td class="titcolor">
                        .png
                    </td>
                    <td>
                        image/png
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .png
                    </td>
                    <td>
                        application/x-png
                    </td>
                    <td class="titcolor">
                        .pot
                    </td>
                    <td>
                        application/vnd.ms-powerpoint
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ppa
                    </td>
                    <td>
                        application/vnd.ms-powerpoint
                    </td>
                    <td class="titcolor">
                        .ppm
                    </td>
                    <td>
                        application/x-ppm
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pps
                    </td>
                    <td>
                        application/vnd.ms-powerpoint
                    </td>
                    <td class="titcolor">
                        .ppt
                    </td>
                    <td>
                        application/vnd.ms-powerpoint
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ppt
                    </td>
                    <td>
                        application/x-ppt
                    </td>
                    <td class="titcolor">
                        .pr
                    </td>
                    <td>
                        application/x-pr
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .prf
                    </td>
                    <td>
                        application/pics-rules
                    </td>
                    <td class="titcolor">
                        .prn
                    </td>
                    <td>
                        application/x-prn
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .prt
                    </td>
                    <td>
                        application/x-prt
                    </td>
                    <td class="titcolor">
                        .ps
                    </td>
                    <td>
                        application/x-ps
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ps
                    </td>
                    <td>
                        application/postscript
                    </td>
                    <td class="titcolor">
                        .ptn
                    </td>
                    <td>
                        application/x-ptn
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .pwz
                    </td>
                    <td>
                        application/vnd.ms-powerpoint
                    </td>
                    <td class="titcolor">
                        .r3t
                    </td>
                    <td>
                        text/vnd.rn-realtext3d
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ra
                    </td>
                    <td>
                        audio/vnd.rn-realaudio
                    </td>
                    <td class="titcolor">
                        .ram
                    </td>
                    <td>
                        audio/x-pn-realaudio
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ras
                    </td>
                    <td>
                        application/x-ras
                    </td>
                    <td class="titcolor">
                        .rat
                    </td>
                    <td>
                        application/rat-file
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rdf
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .rec
                    </td>
                    <td>
                        application/vnd.rn-recording
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .red
                    </td>
                    <td>
                        application/x-red
                    </td>
                    <td class="titcolor">
                        .rgb
                    </td>
                    <td>
                        application/x-rgb
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rjs
                    </td>
                    <td>
                        application/vnd.rn-realsystem-rjs
                    </td>
                    <td class="titcolor">
                        .rjt
                    </td>
                    <td>
                        application/vnd.rn-realsystem-rjt
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rlc
                    </td>
                    <td>
                        application/x-rlc
                    </td>
                    <td class="titcolor">
                        .rle
                    </td>
                    <td>
                        application/x-rle
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rm
                    </td>
                    <td>
                        application/vnd.rn-realmedia
                    </td>
                    <td class="titcolor">
                        .rmf
                    </td>
                    <td>
                        application/vnd.adobe.rmf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rmi
                    </td>
                    <td>
                        audio/mid
                    </td>
                    <td class="titcolor">
                        .rmj
                    </td>
                    <td>
                        application/vnd.rn-realsystem-rmj
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rmm
                    </td>
                    <td>
                        audio/x-pn-realaudio
                    </td>
                    <td class="titcolor">
                        .rmp
                    </td>
                    <td>
                        application/vnd.rn-rn_music_package
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rms
                    </td>
                    <td>
                        application/vnd.rn-realmedia-secure
                    </td>
                    <td class="titcolor">
                        .rmvb
                    </td>
                    <td>
                        application/vnd.rn-realmedia-vbr
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rmx
                    </td>
                    <td>
                        application/vnd.rn-realsystem-rmx
                    </td>
                    <td class="titcolor">
                        .rnx
                    </td>
                    <td>
                        application/vnd.rn-realplayer
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rp
                    </td>
                    <td>
                        image/vnd.rn-realpix
                    </td>
                    <td class="titcolor">
                        .rpm
                    </td>
                    <td>
                        audio/x-pn-realaudio-plugin
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rsml
                    </td>
                    <td>
                        application/vnd.rn-rsml
                    </td>
                    <td class="titcolor">
                        .rt
                    </td>
                    <td>
                        text/vnd.rn-realtext
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rtf
                    </td>
                    <td>
                        application/msword
                    </td>
                    <td class="titcolor">
                        .rtf
                    </td>
                    <td>
                        application/x-rtf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .rv
                    </td>
                    <td>
                        video/vnd.rn-realvideo
                    </td>
                    <td class="titcolor">
                        .sam
                    </td>
                    <td>
                        application/x-sam
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .sat
                    </td>
                    <td>
                        application/x-sat
                    </td>
                    <td class="titcolor">
                        .sdp
                    </td>
                    <td>
                        application/sdp
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .sdw
                    </td>
                    <td>
                        application/x-sdw
                    </td>
                    <td class="titcolor">
                        .sit
                    </td>
                    <td>
                        application/x-stuffit
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .slb
                    </td>
                    <td>
                        application/x-slb
                    </td>
                    <td class="titcolor">
                        .sld
                    </td>
                    <td>
                        application/x-sld
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .slk
                    </td>
                    <td>
                        drawing/x-slk
                    </td>
                    <td class="titcolor">
                        .smi
                    </td>
                    <td>
                        application/smil
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .smil
                    </td>
                    <td>
                        application/smil
                    </td>
                    <td class="titcolor">
                        .smk
                    </td>
                    <td>
                        application/x-smk
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .snd
                    </td>
                    <td>
                        audio/basic
                    </td>
                    <td class="titcolor">
                        .sol
                    </td>
                    <td>
                        text/plain
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .sor
                    </td>
                    <td>
                        text/plain
                    </td>
                    <td class="titcolor">
                        .spc
                    </td>
                    <td>
                        application/x-pkcs7-certificates
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .spl
                    </td>
                    <td>
                        application/futuresplash
                    </td>
                    <td class="titcolor">
                        .spp
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ssm
                    </td>
                    <td>
                        application/streamingmedia
                    </td>
                    <td class="titcolor">
                        .sst
                    </td>
                    <td>
                        application/vnd.ms-pki.certstore
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .stl
                    </td>
                    <td>
                        application/vnd.ms-pki.stl
                    </td>
                    <td class="titcolor">
                        .stm
                    </td>
                    <td>
                        text/html
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .sty
                    </td>
                    <td>
                        application/x-sty
                    </td>
                    <td class="titcolor">
                        .svg
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .swf
                    </td>
                    <td>
                        application/x-shockwave-flash
                    </td>
                    <td class="titcolor">
                        .tdf
                    </td>
                    <td>
                        application/x-tdf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .tg4
                    </td>
                    <td>
                        application/x-tg4
                    </td>
                    <td class="titcolor">
                        .tga
                    </td>
                    <td>
                        application/x-tga
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .tif
                    </td>
                    <td>
                        image/tiff
                    </td>
                    <td class="titcolor">
                        .tif
                    </td>
                    <td>
                        application/x-tif
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .tiff
                    </td>
                    <td>
                        image/tiff
                    </td>
                    <td class="titcolor">
                        .tld
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .top
                    </td>
                    <td>
                        drawing/x-top
                    </td>
                    <td class="titcolor">
                        .torrent
                    </td>
                    <td>
                        application/x-bittorrent
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .tsd
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .txt
                    </td>
                    <td>
                        text/plain
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .uin
                    </td>
                    <td>
                        application/x-icq
                    </td>
                    <td class="titcolor">
                        .uls
                    </td>
                    <td>
                        text/iuls
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vcf
                    </td>
                    <td>
                        text/x-vcard
                    </td>
                    <td class="titcolor">
                        .vda
                    </td>
                    <td>
                        application/x-vda
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vdx
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                    <td class="titcolor">
                        .vml
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vpg
                    </td>
                    <td>
                        application/x-vpeg005
                    </td>
                    <td class="titcolor">
                        .vsd
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vsd
                    </td>
                    <td>
                        application/x-vsd
                    </td>
                    <td class="titcolor">
                        .vss
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vst
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                    <td class="titcolor">
                        .vst
                    </td>
                    <td>
                        application/x-vst
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vsw
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                    <td class="titcolor">
                        .vsx
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .vtx
                    </td>
                    <td>
                        application/vnd.visio
                    </td>
                    <td class="titcolor">
                        .vxml
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wav
                    </td>
                    <td>
                        audio/wav
                    </td>
                    <td class="titcolor">
                        .wax
                    </td>
                    <td>
                        audio/x-ms-wax
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wb1
                    </td>
                    <td>
                        application/x-wb1
                    </td>
                    <td class="titcolor">
                        .wb2
                    </td>
                    <td>
                        application/x-wb2
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wb3
                    </td>
                    <td>
                        application/x-wb3
                    </td>
                    <td class="titcolor">
                        .wbmp
                    </td>
                    <td>
                        image/vnd.wap.wbmp
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wiz
                    </td>
                    <td>
                        application/msword
                    </td>
                    <td class="titcolor">
                        .wk3
                    </td>
                    <td>
                        application/x-wk3
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wk4
                    </td>
                    <td>
                        application/x-wk4
                    </td>
                    <td class="titcolor">
                        .wkq
                    </td>
                    <td>
                        application/x-wkq
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wks
                    </td>
                    <td>
                        application/x-wks
                    </td>
                    <td class="titcolor">
                        .wm
                    </td>
                    <td>
                        video/x-ms-wm
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wma
                    </td>
                    <td>
                        audio/x-ms-wma
                    </td>
                    <td class="titcolor">
                        .wmd
                    </td>
                    <td>
                        application/x-ms-wmd
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wmf
                    </td>
                    <td>
                        application/x-wmf
                    </td>
                    <td class="titcolor">
                        .wml
                    </td>
                    <td>
                        text/vnd.wap.wml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wmv
                    </td>
                    <td>
                        video/x-ms-wmv
                    </td>
                    <td class="titcolor">
                        .wmx
                    </td>
                    <td>
                        video/x-ms-wmx
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wmz
                    </td>
                    <td>
                        application/x-ms-wmz
                    </td>
                    <td class="titcolor">
                        .wp6
                    </td>
                    <td>
                        application/x-wp6
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wpd
                    </td>
                    <td>
                        application/x-wpd
                    </td>
                    <td class="titcolor">
                        .wpg
                    </td>
                    <td>
                        application/x-wpg
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wpl
                    </td>
                    <td>
                        application/vnd.ms-wpl
                    </td>
                    <td class="titcolor">
                        .wq1
                    </td>
                    <td>
                        application/x-wq1
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wr1
                    </td>
                    <td>
                        application/x-wr1
                    </td>
                    <td class="titcolor">
                        .wri
                    </td>
                    <td>
                        application/x-wri
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wrk
                    </td>
                    <td>
                        application/x-wrk
                    </td>
                    <td class="titcolor">
                        .ws
                    </td>
                    <td>
                        application/x-ws
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .ws2
                    </td>
                    <td>
                        application/x-ws
                    </td>
                    <td class="titcolor">
                        .wsc
                    </td>
                    <td>
                        text/scriptlet
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .wsdl
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .wvx
                    </td>
                    <td>
                        video/x-ms-wvx
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xdp
                    </td>
                    <td>
                        application/vnd.adobe.xdp
                    </td>
                    <td class="titcolor">
                        .xdr
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xfd
                    </td>
                    <td>
                        application/vnd.adobe.xfd
                    </td>
                    <td class="titcolor">
                        .xfdf
                    </td>
                    <td>
                        application/vnd.adobe.xfdf
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xhtml
                    </td>
                    <td>
                        text/html
                    </td>
                    <td class="titcolor">
                        .xls
                    </td>
                    <td>
                        application/vnd.ms-excel
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xls
                    </td>
                    <td>
                        application/x-xls
                    </td>
                    <td class="titcolor">
                        .xlw
                    </td>
                    <td>
                        application/x-xlw
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xml
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .xpl
                    </td>
                    <td>
                        audio/scpls
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xq
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .xql
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xquery
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .xsd
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xsl
                    </td>
                    <td>
                        text/xml
                    </td>
                    <td class="titcolor">
                        .xslt
                    </td>
                    <td>
                        text/xml
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .xwd
                    </td>
                    <td>
                        application/x-xwd
                    </td>
                    <td class="titcolor">
                        .x_b
                    </td>
                    <td>
                        application/x-x_b
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .sis
                    </td>
                    <td>
                        application/vnd.symbian.install
                    </td>
                    <td class="titcolor">
                        .sisx
                    </td>
                    <td>
                        application/vnd.symbian.install
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .x_t
                    </td>
                    <td>
                        application/x-x_t
                    </td>
                    <td class="titcolor">
                        .ipa
                    </td>
                    <td>
                        application/vnd.iphone
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        .apk
                    </td>
                    <td>
                        application/vnd.android.package-archive
                    </td>
                    <td class="titcolor">
                        .xap
                    </td>
                    <td>
                        application/x-silverlight-app
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
<script>
    $(function () {
        $.post("<?=Utils::makeUrl('Main/IP', 'getIP')?>", {aaaa:324}, function(data){
            console.log(data);
        });
    })
</script>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>