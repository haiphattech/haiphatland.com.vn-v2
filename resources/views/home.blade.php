@extends('layouts.app')

@section('title', 'Công ty Cổ phần Đầu tư & kinh doanh Bất động sản Hải Phát')

@section('content')
@include('layouts.extends.header')
<div class="main">
    <section class="proud p-t">
        <div class="container">
            <div class="box-proud-txt">
                <h5 class="txt-proud">Tự hào</h5>
                <p class="txt-content">là đơn vị tiên phong trong phát triển hệ sinh thái bất động sản <br> đồng bộ và khép kín đầu tiên tại Việt Nam</p>
                <div class="square-jamb">
                    <div class="square">
                        <i class="fas fa-sort-down fa-2x"></i>
                    </div>
                    <div class="jamb"></div>
                </div>
            </div>

        </div>
    </section>
    <section class="project p-t">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-6">
                    <h2 class="txt-field">Dự án tiên phong</h2>
                    <div class="info-project">
                        <h3 class="title">
                            LA EMERA hạ long
                        </h3>
                        <h6 class="chu-dau-tu">hải phát land dưới vai trò chủ đầu tư</h6>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel urna elementum, varius mi ut, volutpat diam. Nullam dictum est orci, eget tempus eros bibendum et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed commodo et nisl ut aliquam. In in pharetra erat, vel feugiat enim.</p>

                            <p>Nullam dictum est orci, eget tempus eros bibendum et. Vestibulum ante ipsum primis in faucibus orci </p>
                        </div>
                    </div>
                    <div class="position-relative">
                        <button class="position-absolute btn-hpl">
                            Khám phá
                            <img class="arrow-bottom" src="./assets/icons/arrow-bottom.png" alt="arrow-bottom">
                        </button>

                        <img class="geometry-tp" src="./assets/images/geometry-tp.png" alt="">
                    </div>
                </div>
                <div class="col-5 image-project p-l-r-0">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="./assets/images/bg-tp-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="./assets/images/bg-tp-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="field">
        <div class="container-fluid">
            <div class="row top">
                <div class="col-1"></div>
                <div class="col-5 p-l-r-0">
                    <h2 class="box-txt-section"> <span class="txt-field">Lĩnh vực</span><span class="txt-AlumniSans-Medium txt-kinh-doanh"> Kinh doanh</span></h2>
                </div>
                <div class="col-5">
                    <div class="text-end">
                        <a href="">
                            <div class="box-view-all">
                                <span class="txt-all">Xem tất cả</span>
                                <div class="position-absolute">
                                    <div class="square">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <div class="field-control">
                        <div class="position-relative">
                            <p class="txt-services">SERVICES</p>
                        </div>
                    </div>
                    <img class="bg-field" src="./assets/images/bg-feild.png" alt="bg-feild">
                </div>
                <div class="col-11 p-lg-0">
                    <div class="owl-carousel owl-theme list-field">
                        <div class="item">
                            <div class="field-item">
                                <div class="box-img">
                                    <a href="#">
                                        <img class="img-utilities" src="./assets/images/dau_tu_bds.jpg" alt="" width="100%">
                                    </a>
                                    <a href="#" class="hover-nav">
                                        <div class="text-center">
                                            <div class="square">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="name-field">ĐẦU TƯ <br> BẤT ĐỘNG SẢN</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="field-item">
                                <div class="box-img">
                                    <a href="">
                                        <img class="img-utilities" src="./assets/images/phan_phoi_bds.jpg" alt="" width="100%">
                                    </a>
                                    <a href="#" class="hover-nav">
                                        <div class="text-center">
                                            <div class="square">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="name-field">PHÂN PHỐI <br> BẤT ĐỘNG SẢN</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="field-item">
                                <div class="box-img">
                                    <a href="">
                                        <img class="img-utilities" src="./assets/images/marketing_bds.jpg" alt="" width="100%">
                                    </a>
                                    <a href="#" class="hover-nav">
                                        <div class="text-center">
                                            <div class="square">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="name-field">Marketing <br> BẤT ĐỘNG SẢN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="typical-projects">
        <div class="container-fluid">
            <div class="row top">
                <div class="col-1"></div>
                <div class="col-6 p-l-r-0">
                    <h2 class="box-txt-section"> <span class="txt-field">Dự án</span><span class="txt-AlumniSans-Medium txt-tieu-bieu"> tiêu biểu</span></h2>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <a href="">
                            <div class="box-view-all">
                                <span class="txt-all">Xem tất cả</span>
                                <div class="position-absolute">
                                    <div class="square">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7 p-l-r-0">
                    <div class="box-bg-typical-project">
                        <img class="bg-typical-project" src="./assets/images/bg-typical-project.jpg" alt="bg-typical-project">
                    </div>
                </div>
                <div class="col-5">
                    <div class="info-project">
                        <h3 class="title">
                            INOHA CITY
                        </h3>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel urna elementum, varius mi ut, volutpat diam. Nullam dictum est orci, eget tempus eros bibendum et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed commodo et nisl ut aliquam. In .</p>

                            <p>Nullam dictum est orci, eget tempus eros bibendum et. Vestibulum ante ipsum primis in faucibus orci </p>
                        </div>
                        <div class="box-btn-hpl">
                            <div class="position-relative">
                                <button class="position-absolute btn-hpl">
                                    <img class="arrow-bottom" src="./assets/icons/arrow-bottom.png" alt="arrow-bottom">
                                    Khám phá
                                </button>
                            </div>
                        </div>

                        <div class="list-typical-projects">
                            <p class="txt-du-an">Dự án</p>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="item-typical-project">
                                        <p class="name-typical-project mb-0">Golden wind của lò</p>
                                        <img src="./assets/images/t-p-1.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-typical-project">
                                        <p class="name-typical-project mb-0">Golden wind của lò</p>
                                        <img src="./assets/images/t-p-1.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-typical-project">
                                        <p class="name-typical-project mb-0">Golden wind của lò</p>
                                        <img src="./assets/images/t-p-1.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <img class="bg-t-p" src="./assets/images/bg-t-p.png" alt="bg-t-p">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row box-square-jamb">
                <div class="col">
                    <div class="text-center">
                        <div class="square-jamb">
                            <div class="jamb"></div>
                            <div class="square">
                                <i class="fas fa-sort-down fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="impressive-numbers">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="box-txt-section"> <span class="txt-field">Con số</span><span class="txt-AlumniSans-Medium txt-an-tuong"> Ấn tượng</span></h2>
                </div>
            </div>
            <div class="row list-numbers">
                <div class="col-3">
                    <div class="box-circle">
                        <div class="circle">
                            <div class="circle-child">
                                <img src="./assets/icons/icon-project.png" alt="icon-project">
                            </div>
                            <div class="box-number">
                                <h3 class="number">150+</h3>
                                <p class="txt-title">Dự án siêu hot</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-circle">
                        <div class="circle">
                            <div class="circle-child">
                                <img src="./assets/icons/icon-unit-member.png" alt="icon-project">
                            </div>
                            <div class="box-number">
                                <h3 class="number">15+</h3>
                                <p class="txt-title">Đơn vị thành viên</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-circle">
                        <div class="circle">
                            <div class="circle-child">
                                <img src="./assets/icons/icon-home.png" alt="icon-project">
                            </div>
                            <div class="box-number">
                                <h3 class="number">35+</h3>
                                <p class="txt-title">Chi nhánh, văn phòng đại diện</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-circle">
                        <div class="circle">
                            <div class="circle-child">
                                <img src="./assets/icons/icon-user.png" alt="icon-project">
                            </div>
                            <div class="box-number">
                                <h3 class="number">2000+</h3>
                                <p class="txt-title">Thành viên nhiệt huyết</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row p-t">
                <div class="list-partners">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="partner">
                                <img class="" src="./assets/images/partner-1.png" alt="img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner">
                                <img class="" src="./assets/images/partner-2.png" alt="img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner">
                                <img class="" src="./assets/images/partner-5.png" alt="img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner">
                                <img class="" src="./assets/images/partner-3.png" alt="img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="partner">
                                <img class="" src="./assets/images/partner-4.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box-square-jamb">
                <div class="col">
                    <div class="text-center">
                        <div class="square-jamb">
                            <div class="square">
                                <i class="fas fa-sort-down fa-2x"></i>
                            </div>
                            <div class="jamb"></div>
                            <a href="">
                                <img class="arrow-bottom" src="./assets/icons/arrow-bottom.png" alt="arrow-bottom">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-bottom-main"></div>
    </section>
</div>
@endsection
