@extends('admin.layout.index')

@section('body')

    <div class="row anhbanner" style="width: 1550px">

        <div class="col-md-12 banner">
            <h3 class="dream">FOLLOW YOUR DREAM</h3>
            <div class="up">
                <h2 class="online">Learn From Best Online</h2>
                <h2 class="training">Training Exam</h2>
            </div>
            <p class="canbtn">
                <a href="trangchu"><span class="view">VIEW MORE</span></a>
                <a href="trangchu"><span class="thamgia">JOIN EXAMIN</span></a>
            </p>
        </div>
    </div>

    <div class="container-fluid main_test_container">
        <div class="container ">
            <div class="row main_test">
                <div class="col-md-12">
                    <div class="thanh_menu">
                        <ul class="nav nav-tabs">
                            @foreach($semesters as $key => $semester)
                            <li class="thpt{{ $key + 1 }} @if($key == 0) active @endif"><a data-toggle="tab" class="kt{{ $key }}" href="#menu{{ $key }}">{{ $semester->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="tab-content">
                        @foreach($semesters as $key => $semester)
                            <div id="menu{{ $key }}" class="tab-pane fade @if($key == 0)in active @endif">
                                <div class="row hinhanh" style="text-align: center">
                                    @forelse($semester->exams as $exam)
                                        <a href="/hocsinh/dethi/{{$exam->id}}" style="color: #000">
                                            <div class="col-md-3 dethi">
                                                <img src="imgs/monhoc/{{ $exam->subject->image }}" width="199" height="150" alt="">
                                                <p class="tenmon">{{ $exam->subject->name }}</p>
                                                <p class="title">????? thi {{ $semester->name }} g???m {{ $exam->num_question }} c??u, th???i gian
                                                    thi {{ $exam->time }} ph??t</p>
                                                <p class="danhgia">

                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="far fa-star"></i>
                                                    <i class="fas fa-users hscmt"></i> 134
                                                </p>
                                            </div>
                                        </a>
                                    @empty
                                        <div>Kh??ng c?? n???i dung</div>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row loiich">
        <div class="col-md-4"></div>
        <div class="col-md-5 camnhan">
            <h3>C??C TI???N ??CH THI TR???C TUY???N</h3>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row gt">
        <div class="col-md-12">
            <p>Gi??p c??c em h???c sinh n??ng cao ki???n th???c, ?????t k???t qu??? cao, ph??t huy n??ng l???c v?? y??u th??ch h???c t???p. ?????ng
                th???i ti???t ki???m t???i ??a th???i gian, v?? chi ph??.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset('imgs/banner/bg-utility_.png') }}" alt="" width="250" height="400">
        </div>
        <div class="col-md-8">
            <div class="row ctloi">
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-kiem-tra-thi-8.png') }}" alt="">
                    <p>Ph?? h???p v???i quy tr??nh thi</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-cau-hoi-da-dang-6.png') }}" alt="">
                    <p>H??? tr??? ph???n m???m nhanh, hi???u qu???</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-hoc-tu-vung-2.png') }}" alt="">
                    <p>Tr??nh gian l???n trong thi c???</p>
                </div>
            </div>
            <div class="row ctloi">
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-nhac-lich-hoc-4.png') }}" alt="">
                    <p>Nh???c nh??? l???ch h???c h???ng ng??y</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-noi-dung-9.png') }}" alt="">
                    <p>Qu???n l?? ng??n h??ng c??u h???i</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-thong-ke-ky-nang-5.png') }}" alt="">
                    <p>Qu???n l?? ????? thi ??a d???ng</p>
                </div>
            </div>
            <div class="row ctloi">
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-tra-tu-dien-1.png') }}" alt="">
                    <p>Ti???t ki???m th???i gian</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-tuong-tac-cao-7.png') }}" alt="">
                    <p>T??nh t????ng t??c cao(Chat, B??nh lu???n)</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imgs/banner/icon-xem-live-stream-3.png') }}" alt="">
                    <p>T????ng t??c v?? gi???i ????p tr???c ti???p</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <img src="{{ asset('imgs/banner/bg-utility_.png') }}" width="250" height="400" alt="">
        </div>
    </div>

    <div class="container-fluid thisinhcamnhan">
        <div class="container">
            <div class="row emotion">
                <div class="col-md-4"></div>
                <div class="col-md-5 camnhan">

                    <h3>C???M NH???N TH?? SINH V??? CH??NG T??I</h3>
                </div>

                <div class="col-md-3"></div>
            </div>

            <div class="row abc">
                <div class="col-md-4">
                    <div class="card middle">
                        <div class="front anhfb1">

                            <p class="fb1"><img src="{{ asset('imgs/fb1.png') }}" alt=""></p>
                            <p class="tenthisinh">L?? Th??? Ng???c Th???o</p>
                            <p class="cmt"><span class="icon fa fa-quote-left"> </span>&nbsp;&nbsp; Tr??????c ti??n cho em
                                g????i l????i ca??m ??n ch??n tha??nh t????i ?????i ng?? ph??t tr???n ??a?? ta??o ra cho em m???t m??i tr?????ng
                                ho??c t????p b???? i??ch va?? ly?? thu?? c??ng v???i s??? l?????ng c??u h???i ??a d???ng r???t ph?? h???p v???i xu
                                h?????ng hi???n nay. H???? th????ng c?? c??c b??i gi???ng, b??i t???p, b??i thi qua ???? gi??p em c???i thi???n
                                ???????c ??i???m s??? kh??? quan. &nbsp;<span class="icon fa fa-quote-right"> </span></p>
                            <p class="decoration"></p>
                        </div>
                        <div class="back">
                            <div class="back-content middle">
                                <h2>EXAMIN</h2>
                                <span>Join Exam Now !</span>
                                <div class="sm">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card middle">
                        <div class="front anhfb2">
                            <p class="fb1"><img src="{{ asset('imgs/fb2.jpg') }}" alt=""></p>
                            <p class="tenthisinh">Nguy???n Th??? Qu???nh</p>
                            <p class="cmt"><span class="icon fa fa-quote-left"> </span>&nbsp;&nbsp; Tr??????c ti??n cho em
                                g????i l????i ca??m ??n ch??n tha??nh t????i ?????i ng?? ph??t tr???n ??a?? ta??o ra cho em m???t m??i tr?????ng
                                ho??c t????p b???? i??ch va?? ly?? thu?? c??ng v???i s??? l?????ng c??u h???i ??a d???ng r???t ph?? h???p v???i xu
                                h?????ng hi???n nay. H???? th????ng c?? c??c b??i gi???ng, b??i t???p, b??i thi qua ???? gi??p em c???i thi???n
                                ???????c ??i???m s??? kh??? quan. &nbsp;<span class="icon fa fa-quote-right"> </span></p>
                            <p class="decoration"></p>
                        </div>
                        <div class="back">
                            <div class="back-content middle">
                                <h2>EXAMIN</h2>
                                <span>Join Exam Now !</span>
                                <div class="sm">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card middle">
                        <div class="front anhfb3">
                            <p class="fb1"><img src="{{ asset('imgs/fb3.png') }}" alt=""></p>
                            <p class="tenthisinh">??o??n Th??? Linh</p>
                            <p class="cmt"><span class="icon fa fa-quote-left"> </span>&nbsp;&nbsp; Tr??????c ti??n cho em
                                g????i l????i ca??m ??n ch??n tha??nh t????i ?????i ng?? ph??t tr???n ??a?? ta??o ra cho em m???t m??i tr?????ng
                                ho??c t????p b???? i??ch va?? ly?? thu?? c??ng v???i s??? l?????ng c??u h???i ??a d???ng r???t ph?? h???p v???i xu
                                h?????ng hi???n nay. H???? th????ng c?? c??c b??i gi???ng, b??i t???p, b??i thi qua ???? gi??p em c???i thi???n
                                ???????c ??i???m s??? kh??? quan. &nbsp;<span class="icon fa fa-quote-right"> </span></p>
                            <p class="decoration"></p>
                        </div>
                        <div class="back">
                            <div class="back-content middle">
                                <h2>EXAMIN</h2>
                                <span>Join Exam Now !</span>
                                <div class="sm">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
