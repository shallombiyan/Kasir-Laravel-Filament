<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ShoesSiuuu</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- fonts awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- Custom styles - you'll need to host this somewhere or include directly -->
    <style>
      body {
        font-family: "Poppins", sans-serif;
        overflow-x: hidden;
      }

      h1 {
        color: #ffab00;
      }

      .produk {
        color: #ffab00;
      }

      .layout_margin {
        margin-top: 90px;
        margin-bottom: 90px;
      }

      .layout_padding {
        padding-top: 90px;
        padding-bottom: 90px;
      }

      .layout_padding2 {
        padding-top: 75px;
        padding-bottom: 75px;
      }

      .layout_padding2-top {
        padding-top: 75px;
      }

      .layout_padding2-bottom {
        padding-bottom: 75px;
      }

      .layout_padding-top {
        padding-top: 90px;
      }

      .layout_padding-bottom {
        padding-bottom: 90px;
      }

      .heading_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .heading_container h2 {
        font-weight: bold;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 7px;
      }

      .heading_container h2::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 45px;
        height: 5px;
        background-color: #ffffff;
        border-radius: 10px;
      }

      .heading_container .heading_center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
      }

      .detail_box_common {
        background-color: #ffab00;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #ffffff;
      }

      .text_center {
        text-align: center;
      }

      /*header section*/
      .hero_area {
        position: relative;
      }

      .sub_page .header_section {
        position: relative;
        background-color: #85310c;
      }

      .sub_page .header_section .custom_menu-btn span {
        background-color: #fff;
      }

      .sub_page .header_section .navbar-brand span {
        color: #ffab00;
      }

      .header_section {
        padding: 15px 25px;
        position: absolute;
        z-index: 99999;
        width: 100%;
      }

      .header_section .nav_container {
        margin: 0 auto;
      }

      .navbar-brand {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
        margin-left: 5%;
      }

      .navbar-brand span {
        font-weight: 700;
        color: #ffab00;
        font-size: 24px;
        text-transform: uppercase;
      }

      .custom_nav-container {
        padding: 0;
        height: 100%;
      }

      .custom_nav-container .call_btn {
        display: inline-block;
        background-color: #ffffff;
        color: #000000;
        padding: 8px 25px;
        border: 1px solid #ffffff;
        border-radius: 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        text-transform: uppercase;
        font-size: 15px;
        text-transform: uppercase;
        margin-left: auto;
      }

      .custom_nav-container .call_btn:hover {
        background-color: transparent;
        color: #ffffff;
      }

      .custom_nav-container.navbar-expand-lg .navbar-nav .nav-link {
        padding: 0px 25px;
        color: #fefeff;
        text-align: center;
        font-family: "Roboto", sans-serif;
      }

      .custom_menu-btn button {
        outline: none;
        border: none;
        background-color: transparent;
        padding: 0;
      }

      .custom_menu-btn span {
        display: block;
        width: 35px;
        height: 4.5px;
        background-color: #000000;
        margin: 7px 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .menu_btn-style {
        position: fixed;
        left: 27.5px;
        top: 12.5px;
      }

      .menu_btn-style button {
        margin-top: 0px;
        outline: none;
        border: none;
        background-color: transparent;
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
      }

      .menu_btn-style span {
        display: block;
        width: 35px;
        height: 4.5px;
        background-color: #ffab00;
        margin: 7px 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .menu_btn-style button .s-1 {
        -webkit-transform: rotate(45deg) translateY(16px);
        transform: rotate(45deg) translateY(16px);
      }

      .menu_btn-style button .s-2 {
        -webkit-transform: translateX(-100px);
        transform: translateX(-100px);
      }

      .menu_btn-style button .s-3 {
        -webkit-transform: rotate(-45deg) translateY(-16px);
        transform: rotate(-45deg) translateY(-16px);
      }

      .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.836);
        overflow-x: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
      }

      .overlay .closebtn {
        position: absolute;
        top: 0;
        right: 30px;
      }

      .overlay a {
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        text-transform: uppercase;
        color: #ffffff;
        margin: 10px 0;
        display: block;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        border: 1.5px solid #ffffff;
        border-radius: 5px;
        width: 190px;
      }

      .overlay a:hover,
      .overlay a.active {
        border-color: transparent;
        background-color: #ffab00;
        color: #000000;
      }

      .menu_btn-style {
        display: none;
      }

      .overlay-content {
        position: relative;
        top: 20%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .menu_width {
        width: 100%;
      }

      .scroll-y-hidden {
        overflow-y: hidden;
      }

      a,
      a:hover,
      a:focus {
        text-decoration: none;
      }

      a:hover,
      a:focus {
        color: initial;
      }

      .btn,
      .btn:focus {
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      /*end header section*/
      .slider_section {
        background-image: url(../images/slider-bg.jpg);
        background-size: cover;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        position: relative;
      }

      .slider_section .slider_text_carousel,
      .slider_section .slider_image_carousel {
        width: 100%;
        height: 100%;
      }

      .slider_section .slider_text_carousel .carousel-inner,
      .slider_section .slider_text_carousel .carousel-item,
      .slider_section .slider_image_carousel .carousel-inner,
      .slider_section .slider_image_carousel .carousel-item {
        height: 100%;
      }

      .slider_section .detail-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        background-color: #000000;
        padding: 0;
      }

      .slider_section .detail-box .detail_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100%;
        padding: 0 25px;
      }

      .slider_section .detail-box h1 {
        margin: 25px auto;
        font-weight: bold;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        text-transform: uppercase;
      }

      .slider_section .detail-box a {
        display: inline-block;
        background-color: #85310c;
        color: #ffffff;
        padding: 10px 45px;
        border: 1px solid #85310c;
        border-radius: 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        text-transform: uppercase;
      }

      .slider_section .detail-box a:hover {
        background-color: transparent;
        color: #85310c;
      }

      .slider_section .img-box {
        -webkit-box-flex: 3;
        -ms-flex: 3;
        flex: 3;
        padding: 0;
      }

      .slider_section .img-box img {
        width: 100%;
      }

      .slider_section .carousel_btn-box {
        position: absolute;
        right: 0;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-left: 45px;
        z-index: 2;
      }

      .slider_section .carousel_btn-box .slider_btn_prev,
      .slider_section .carousel_btn-box .slider_btn_next {
        width: 50px;
        height: 50px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 20px;
        color: #ffffff;
        background-color: #ffab00;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .slider_section .carousel_btn-box .slider_btn_prev:hover,
      .slider_section .carousel_btn-box .slider_btn_next:hover {
        background-color: #000000;
        color: #85310c;
      }

      .about_section .heading_container h2 {
        text-transform: uppercase;
      }

      .about_section .detail-box {
        background-color: #ffab00;
        padding: 0 20px;
      }

      .about_section .detail-box p {
        margin-top: 15px;
      }

      .about_section .detail-box a {
        display: inline-block;
        background-color: #ffab00;
        color: #ffffff;
        padding: 10px 40px;
        border: 1px solid #ffab00;
        border-radius: 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        text-transform: uppercase;
        margin-top: 15px;
      }

      .about_section .detail-box a:hover {
        background-color: #ffffff;
        border-color: #ffffff;
        color: #ffab00;
      }

      .about_section .img-box {
        position: relative;
        padding: 0;
      }

      .about_section .img-box img {
        width: 100%;
        position: relative;
        z-index: 1;
        -webkit-box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.25);
        box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.25);
      }

      .portfolio_section {
        text-align: center;
        background-color: #000000;
      }

      .portfolio_section .heading_container {
        margin-bottom: 45px;
      }

      .portfolio_section .heading_container h2::before {
        background-color: #ffab00;
      }

      .portfolio_section p {
        margin-top: 25px;
        margin-bottom: 30px;
      }

      .portfolio_section .portfolio_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .portfolio_section .portfolio_container .img-box {
        margin: 10px;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
      }

      .portfolio_section .portfolio_container .img-box img {
        width: 100%;
        height: 100%;
      }

      .portfolio_section .portfolio_container .img-box .btn-box {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .portfolio_section .portfolio_container .img-box .btn-box a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 45px;
        height: 45px;
        background-color: #ffffff;
        border-radius: 100%;
        background-size: 18px;
        background-position: center;
        background-repeat: no-repeat;
        margin: 0 5px;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        color: #ffab00;
        font-size: 20px;
      }

      .portfolio_section .portfolio_container .img-box .btn-box a:hover {
        background-color: rgba(228, 234, 234, 0.9);
      }

      .portfolio_section .portfolio_container .img-box::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #ffaa00c5;
        z-index: 0;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .portfolio_section .portfolio_container .img-box:hover a {
        visibility: visible;
        opacity: 1;
      }

      .portfolio_section .portfolio_container .img-box:hover::before {
        visibility: visible;
        opacity: 1;
      }

      .portfolio_section .portfolio_container .box-1,
      .portfolio_section .portfolio_container .box-2,
      .portfolio_section .portfolio_container .box-3 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: stretch;
        -ms-flex-pack: stretch;
        justify-content: stretch;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
      }

      .portfolio_section .portfolio_container .box-2-btm {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: stretch;
        -ms-flex-pack: stretch;
        justify-content: stretch;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
      }

      .portfolio_section .portfolio_container .box-2-btm .box-2-left {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .portfolio_section .portfolio_container .box-2-btm .box-2-right {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: stretch;
        -ms-flex-pack: stretch;
        justify-content: stretch;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
      }

      .portfolio_section .read_btn {
        display: inline-block;
        background-color: #85310c;
        color: #ffffff;
        padding: 7px 30px;
        border: 1px solid #85310c;
        border-radius: 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        text-transform: uppercase;
        margin-top: 75px;
      }

      .portfolio_section .read_btn:hover {
        background-color: transparent;
        color: #85310c;
      }

      .pengumuman_section {
        padding: 50px 20px;
        background-color: #ffab00;
        border-radius: 10px;
      }

      .pengumuman_section .heading_container h2 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        color: #ffffff;
        margin-bottom: 20px;
      }

      .pengumuman_section p,
      .pengumuman_section ul {
        font-size: 16px;
        color: #ffffff;
        line-height: 1.8;
        margin-bottom: 15px;
      }

      .pengumuman_section .store_address,
      .pengumuman_section .store_hours {
        font-weight: bold;
        color: #222;
      }

      .pengumuman_section .contact_info {
        list-style: none;
        padding: 0;
      }

      .pengumuman_section .contact_info li {
        margin-bottom: 10px;
        font-weight: bold;
      }

      .pengumuman_section .closing_note {
        font-style: italic;
        color: #777;
      }

      .team_section .team_container {
        padding: 25px 45px;
      }

      .team_section .team_box {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        margin: 25px 0;
      }

      .team_section .team_box .img-box img {
        width: 100%;
      }

      .team_section .team_box .detail-box {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        background-color: rgba(163, 67, 24, 0.9);
        color: #ffffff;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .team_section .team_box .detail-box h5 {
        font-weight: 600;
      }

      .team_section .team_box .detail-box a {
        color: inherit;
        font-size: 24px;
      }

      .team_section .team_box .detail-box a:hover {
        color: #85310c;
      }

      .team_section .team_box:hover .detail-box {
        opacity: 1;
        visibility: visible;
      }

      .contact_section {
        position: relative;
      }

      .contact_section .heading_container {
        margin-bottom: 15px;
      }

      .contact_section .heading_container h2::before {
        left: 0;
        -webkit-transform: none;
        transform: none;
      }

      .contact_section .map_container {
        height: 450px;
        overflow: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        padding: 0;
      }

      .contact_section .map_container .map {
        height: 100%;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
      }

      .contact_section .map_container .map #googleMap {
        height: 100%;
      }

      .contact_section .info_contact .contact_link_box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .contact_section .info_contact .contact_link_box a {
        margin: 5px 0;
        color: #ffffff;
      }

      .contact_section .info_contact .contact_link_box a i {
        margin-right: 5px;
      }

      .contact_section .info_contact .contact_link_box a:hover {
        color: #85310c;
      }

      .contact_section .info_social {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-top: 20px;
      }

      .contact_section .info_social a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffffff;
        border-radius: 100%;
        margin-right: 10px;
        font-size: 24px;
      }

      .contact_section .info_social a:hover {
        color: #85310c;
      }

      /* footer section*/
      .footer_section {
        background-color: #000000;
        color: #ffab00;
        padding: 0 15px;
      }

      .footer_section .row {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .footer_section p {
        margin: 0;
        padding: 25px 0;
        color: #bb8821;
      }

      .footer_section p a {
        color: inherit;
      }

      .footer_section .link_box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
      }

      .footer_section .link_box a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffab00;
        margin-left: 15px;
      }

      .footer_section .link_box a:hover {
        color: #af7500;
      }
      /*# sourceMappingURL=style.css.map */

    </style>

    <!-- responsive style - you'll need to host this somewhere or include directly -->
    <style>
      @media (max-width: 1200px) {
          .footer_section {
              text-align: center;
              padding-top: 25px;
          }

          .footer_section .row {
              flex-direction: column-reverse;
          }

          .footer_section .link_box {
              justify-content: center;
          }
      }

      @media (max-width: 1120px) {
          .slider_section .detail-box h1 {
              font-size: 2rem;
          }
      }

      @media (max-width: 991px) {
          .portfolio_section .portfolio_container {
              flex-wrap: wrap;
          }

          .portfolio_section .portfolio_container .box-1 {
              flex-basis: 100%;
              flex-direction: row;
          }

          .portfolio_section .portfolio_container .box-2,
          .portfolio_section .portfolio_container .box-3 {
              flex-basis: 50%;
          }

          .detail_box_common {
              padding: 25px 15px !important;
          }

          .about_section .img-box img {
              height: 100%;
          }

          .footer_section {
              padding-left: 0;
              padding-right: 0;
          }
      }

      @media (max-width: 767px) {
          .detail_box_common {
              padding: 45px 15px !important;
          }

          .custom_nav-container {
              justify-content: space-between;
          }

          .custom_menu-btn span {
              background-color: #fff;
          }

          .navbar-brand span {
              color: #fff;
          }

          .custom_nav-container .call_btn {
              margin: 0;
          }

          .slider_section .row {
              flex-direction: column-reverse;
          }

          .slider_section .detail-box .detail_content {
              padding: 45px 25px;
          }

          .slider_section .detail-box h1 {
              margin-top: 0;
          }

          .portfolio_section .portfolio_container .box-2,
          .portfolio_section .portfolio_container .box-3 {
              flex-basis: 100%;
          }

          .portfolio_section .portfolio_container .box-3 {
              flex-direction: row;
          }

          .contact_section .heading_container h2::before {
              left: 50%;
              transform: translateX(-50%);
          }

          .contact_section .detail-box {
              text-align: center;
              align-items: center;
          }

          .contact_section .info_social {
              justify-content: center;
          }

          .contact_section .info_social a {
              margin: 0 10px;
          }
      }

      @media (max-width: 576px) {

          .heading_container h2 {
              font-size: 1.8rem;
          }

          .portfolio_section .portfolio_container .box-1,
          .portfolio_section .portfolio_container .box-3 {
              flex-direction: column;
          }

          .footer_section .link_box {
              flex-direction: column;
              align-items: center;
          }

          .footer_section .link_box a {
              margin-left: 0;
          }

          .footer_section .link_box a:not(:nth-last-child(1)) {
              margin-bottom: 10px;

          }

      }

      @media (max-width: 480px) {
          .custom_nav-container .call_btn {
              display: none;
          }
      }

      @media (max-width: 420px) {}

      @media (max-width: 360px) {}

      @media (min-width: 1200px) {
          .container {
              max-width: 1170px;
          }

      }
    </style>
</head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="menu_btn-style">
              <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div class="overlay-content">
              <a class="active" href="index.html"> Home </a>
              <a class="" href="about.html"> Tentang </a>
              <a class="" href="portfolio.html"> Produk</a>
              <a class="" href="team.html"> Pengumuman </a>
            </div>
          </div>
          <a class="navbar-brand" href="index.html">
            <span> ShoesSiuuu </span>
          </a>
        </nav>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section position-relative">
        <div class="container-fluid">
          <div class="row">
            <div class="detail-box col-lg-4 col-md-5">
              <div
                id=""
                class="carousel slide slider_text_carousel"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="detail_content">
                      <div>
                        <h1>Terjangkau</h1>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="detail_content">
                      <div>
                        <h1>Lengkap</h1>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="detail_content">
                      <div>
                        <h1>Modis</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="img-box col-lg-8 col-md-7">
              <div
                id=""
                class="carousel slide slider_image_carousel carousel-fade"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/slidee.png" alt="" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/slide2.png" alt="" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/slide3.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="carousel_btn-box">
                <a
                  class="slider_btn_prev"
                  href=""
                  role="button"
                  data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="slider_btn_next"
                  href=""
                  role="button"
                  data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section">
      <div class="container-fluid">
        <div class="row">
          <div class="img-box col-lg-8 col-md-7">
            <img src="images/tentang.png" alt="" />
          </div>
          <div
            class="detail-box detail_box_common col-lg-4 col-md-5 text_center">
            <div class="heading_container heading_center">
              <h2>Tentang Kami</h2>
            </div>
            <p>
              Selamat datang di Shoes Siuuu, destinasi utama bagi Anda yang
              mencari sepatu berkualitas dengan gaya terbaik! Kami adalah toko
              sepatu yang menyediakan berbagai pilihan dari sepatu
              <b>formal, kasual, hingga olahraga</b> , sesuai dengan kebutuhan
              dan gaya hidup Anda. <br /><br />
              Di Shoes Siuuu, kami percaya bahwa sepatu bukan sekadar alas kaki,
              tetapi juga representasi dari kepribadian dan kenyamanan Anda.
              Oleh karena itu, kami menghadirkan koleksi berkualitas tinggi,
              desain modis, dan harga terjangkau agar setiap langkah Anda
              semakin percaya diri.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- portfolio section -->

    <section class="portfolio_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <div class="produk"><h2>Produk</h2></div>
        </div>
        <div class="portfolio_container">
          <div class="box-1">
            <div class="img-box b-1">
              <img src="images/p1.png" alt="" />
              <div class="btn-box"></div>
            </div>
            <div class="img-box b-2">
              <img src="images/p2.png" alt="" />
              <div class="btn-box"></div>
            </div>
          </div>
          <div class="box-2">
            <div class="box-2-top">
              <div class="img-box b-3">
                <img src="images/p3.png" alt="" />
                <div class="btn-box"></div>
              </div>
            </div>
          </div>
          <div class="box-3">
            <div class="img-box b-1">
              <img src="images/p4.png" alt="" />
              <div class="btn-box"></div>
            </div>
            <div class="img-box b-2">
              <img src="images/p5.png" alt="" />
              <div class="btn-box"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end portfolio section -->

    <!-- pengumuman section -->
    <section class="pengumuman_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 detail-box detail_box_common">
            <div class="heading_container">
              <h2>Pengumuman</h2>
            </div>
            <p>
              <b>Kepada Pelanggan yang Terhormat,</b>
              <br /><br />
              Kami ingin menginformasikan bahwa saat ini Shoes Siuuu hanya
              melayani transaksi langsung di toko dan belum menyediakan layanan
              pembelian online.
              <br /><br />
              Untuk melakukan pembelian, Anda dapat mengunjungi toko kami secara
              langsung di:
              <br />
              <b>[Masukkan alamat toko Anda di sini]</b>
              <br /><br />
              Jam Operasional:
              <br />
              <b>[Masukkan jam operasional toko]</b>
              <br /><br />
              Kami mohon maaf atas ketidaknyamanan ini. Untuk informasi lebih
              lanjut tentang produk dan ketersediaan, Anda dapat menghubungi
              kami melalui:
              <br /><br />
              Telepon: <b>[Nomor telepon toko]</b>
              <br />
              WhatsApp: <b>[Nomor WhatsApp]</b> <br /><br />
              Terima kasih atas pengertian dan kepercayaan Anda kepada Shoes
              Siuuu.
              <br /><br />
              <i
                >Note: Silakan kunjungi toko kami untuk melihat koleksi lengkap
                sepatu formal, kasual, dan olahraga yang kami sediakan.</i
              >
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end pengumuman section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6">
            <p>&copy; <span id="displayYear"></span> All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=myMap"></script>
  </body>
</html>
