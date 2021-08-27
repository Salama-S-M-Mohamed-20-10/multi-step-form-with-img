<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- belong to responsive-->
        <title>محاميك</title>
        <!-- icon -->
        <link rel="shortcut icon" type="image/png" href="{{asset('images/icon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        <div class="navBar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                      <a class="navbar-brand" href="index.html"><img src="lawyerDashboard/src/img/logo.png"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span class="two"></span>
                        <span></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Amir Hossni
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <span><a class="dropdown-item" href="userInformation.html">بيانتي <i class="far fa-address-book"></i> </a></span>
                                    <span><a class="dropdown-item" href="dateForUser.html">المواعيد <i class="fas fa-calendar-alt"></i> </a></span>
                                    <span><a class="dropdown-item" href="#">خروج <i class="fas fa-sign-out-alt"></i> </a></span>
                                </ul>
                            </div>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./signIn.html">دخول</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./signUp.html">سجل الأن</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./contact.html">تواصل معنا</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./signLwayer.html">هل انت محامي</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
        </div>
        <!-- end NavBar-->
        <!--start header-->
        <div class="header">
          <div class="clip"></div>
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/p1.jpg" class="d-block w-100" alt="p1">
                <div class="carousel-caption ">
                  <p>محاميك<br>افضل واسرع طريقة للتواصل مع اقرب محامي لك </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/p2.jpg" class="d-block w-100" alt="p1">
                <div class="carousel-caption ">
                  <p>افضل نظام لايجاد المحامي لعملاء له </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/p3.jpg" class="d-block w-100" alt="p2">
                <div class="carousel-caption ">
                  <p>استشارات قانونية لمساعدتك</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        <!--end header-->
        <!--start choice specializiation-->
        <div class="choice">
          <div class="container">
            <h2>ازاي تختار التخصص؟</h2>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 button">
                <a class="btn btn-primary" href="./specializization.html" role="button">التخصص</a>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h3>اتعرف علي التخصصات </h3>
              </div>
            </div>
          </div>
        </div>
        <!--end choice specializiation-->
        <!--start seslect lawyer-->
        <div class="select">
          <div class="container">
            <div class="inputs shadow p-5">
              <div class="row">
                <div class="col-lg-3">
                  <div class=" input-group-lg">
                    <div class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-gavel"></i> اكتب اسم المحامي</div>
                    <input type="text" class="form-control" placeholder="ابحث بالاسم" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class=" input-group-lg">
                    <div class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-balance-scale"></i> ابحث بالتخصص</div>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>حدد التخصص لمساعدتك</option>
                      <option value="1">محامي عام</option>
                      <option value="2">المحامي الجنائي</option>
                      <option value="3">محامي الملكية الفكرية</option>
                      <option value="4">محامي الافلاس</option>
                      <option value="5">محامي الاصابات الشخصية</option>
                      <option value="6">محامي سوء الممارسة الطبية</option>
                      <option value="7">محامي العمل</option>
                      <option value="8">محامي الدعاوي المدنية</option>
                      <option value="9">محامي تعويض العمال</option>
                      <option value="10">محامي التخطيط العمراني</option>
                      <option value="11">محامي المؤسسة</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class=" input-group-lg">
                    <div class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-street-view"></i> ابحث بمحافظتك</div>
                    <select class="form-select" id="city" aria-label="Default select example" onchange="select_city()">
                      <option selected>حدد المحافظة المقصودة</option>
                      <option value="All">جميع المحافظات</option>
                      <option value="Cairo">القاهرة</option>
                      <option value="Geza">الجيزة</option>
                      <option value="Alex">الاسكندرية</option>
                      <option value="Sahel">الساحل الشمالي</option>
                      <option value="Qalubia">القليوبية</option>
                      <option value="Gharbia">الغربية</option>
                      <option value="Menofia">المنوفية</option>
                      <option value="Fayom">الفيوم</option>
                      <option value="Daqhlia">الدقهلية</option>
                      <option value="Sharqia">الشرقية</option>
                      <option value="Bhera">البحيرة</option>
                      <option value="Domiat">دمياط</option>
                      <option value="Matrooh">مطروح</option>
                      <option value="Asut">اسيوط</option>
                      <option value="Ismalia">الاسماعيلية</option>
                      <option value="Ghardaa">الغردقة</option>
                      <option value="Sharm">شرم الشيخ</option>
                      <option value="Boursaid">بورسعيد</option>
                      <option value="Sues">السويس</option>
                      <option value="Suhag">سوهاج</option>
                      <option value="Menia">المنيا</option>
                      <option value="Quafrelshikh">كفر الشيخ</option>
                      <option value="Auxer">الاقصر</option>
                      <option value="Quena">قنا</option>
                      <option value="Banisuef">بني سويف</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class=" input-group-lg">
                    <div class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-map-marker-alt"></i> ابحث بمناطق محافظتك</div>
                      <select class="form-select" id="All_mnt2a" aria-label="Default select example">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="All">جميع المناطق</option>
                      </select>
                      <select class="form-select" id="cairo" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="msr_elgdeda">مصر الجديدة</option>
                        <option value="mdina_nasr">مدينة نصر</option>
                        <option value="elm3ady">المعادي</option>
                        <option value="eltgmoa">التجمع</option>
                        <option value="hadaqe">حدائق القبة</option>
                        <option value="elebor">مدينة العبور</option>
                        <option value="elmenil">المنيل</option>
                        <option value="shobra">شبرا</option>
                        <option value="westElbalad">وسط البلد</option>
                      </select>
                      <select class="form-select" id="Geza" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="dokki">الدقي</option>
                        <option value="october">6 اكتوبر</option>
                        <option value="elharm">الهرم</option>
                        <option value="fiesl">فيصل</option>
                        <option value="sheikhzayed">الشيخ زايد</option>
                        <option value="hdaqeelahram">حدائق الاهرام</option>
                        <option value="elagoza">العجوزة</option>
                        <option value="bolaadakror">بولاق الدكرور</option>
                      </select>
                      <select class="form-select" id="alex" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="mhtet_elraml">محطة الرمل</option>
                        <option value="roshdy">رشدي</option>
                        <option value="smohaa">سموحة</option>
                        <option value="sedi_gaber">سيدي جابر</option>
                        <option value="loran">لوران</option>
                        <option value="elagmy">العجمي</option>
                        <option value="elasafra">العصافرة</option>
                        <option value="elmontazah">المنتزه</option>
                        <option value="elamria">العامرية</option>
                      </select>
                      <select class="form-select" id="sahel" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="elsahel_elshmaly">الساحل الشمالي</option>
                      </select>
                      <select class="form-select" id="qalubia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="shebin_elkanater">شبين القناطر</option>
                        <option value="banha">بنها</option>
                        <option value="qlube">قليوب</option>
                      </select>
                      <select class="form-select" id="gharbia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="smnood">سمنود</option>
                        <option value="tanta">طنطا</option>
                        <option value="kafe_elzayat">كفر الزيات</option>
                        <option value="elmhala_elkobra">المحلة الكبري</option>
                      </select>
                      <select class="form-select" id="menofia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="ashmoon">اشمون</option>
                        <option value="shebin_elkoom">شبين الكوم</option>
                        <option value="mnoof">منوف</option>
                        <option value="elsadat">مدينة السادات</option>
                        <option value="berkat_elsabea">بركة السبع</option>
                      </select>
                      <select class="form-select" id="fayom" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="abshoey">ابشواي</option>
                        <option value="madenat_elfayom">مدينة الفيوم</option>
                      </select>
                      <select class="form-select" id="daqhlia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="aga">اجا</option>
                        <option value="belkas">بلقاس</option>
                        <option value="sherieen">شربين</option>
                        <option value="senbloyen">السنبلاوين</option>
                        <option value="elmnsoura">المنصورة</option>
                        <option value="met_ghamr">ميت غمر</option>
                      </select>
                      <select class="form-select" id="sharqia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="abo_hamad">ابو حماد</option>
                        <option value="blbees">بلبيس</option>
                        <option value="zakasiek">الزقازيق</option>
                        <option value="menia_elamh">منيا القمح</option>
                        <option value="faquos">فاقوس</option>
                      </select>
                      <select class="form-select" id="bhera" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="damnhour">دمنهور</option>
                        <option value="kafr_eldawar">كفر الدوار</option>
                      </select>
                      <select class="form-select" id="domiat" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="domiat_elgdeda">مدينة دمياط الجديدة</option>
                        <option value="domiat">مدينة دمياط</option>
                      </select>
                      <select class="form-select" id="matrooh" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="marsa_matrooh">مرسي مطروح</option>
                      </select>
                      <select class="form-select" id="asut" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="abnob">ابنوب</option>
                        <option value="diroot">ديروط</option>
                        <option value="mnfloot">منفلوط</option>
                        <option value="markz_asut">مركز اسيوط</option>
                      </select>
                      <select class="form-select" id="ismalia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_elesmalia">مدينة الاسماعيلية</option>
                      </select>
                      <select class="form-select" id="ghardaa" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_elghrdaa">مدينة الغردقة</option>
                      </select>
                      <select class="form-select" id="sharm" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_sharm_elshekh">مدينة شرم الشيخ</option>
                      </select>
                      <select class="form-select" id="boursaid" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_boursaid">مدينة بورسعيد </option>
                        <option value="bourfoad">بور فؤاد</option>
                      </select>
                      <select class="form-select" id="sues" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_elsues">مدينة السويس </option>
                      </select>
                      <select class="form-select" id="suhag" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madint_suhag">مدينة سوهاج </option>
                      </select>
                      <select class="form-select" id="menia" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="markez_elmenia">مركز المنيا </option>
                      </select>
                      <select class="form-select" id="quafrelshikh" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="markez_kafrelsheikh">مركز كفر الشيخ </option>
                      </select>
                      <select class="form-select" id="auxer" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="markez_kafrelsheikh">مدينة الاقصر </option>
                        <option value="esna">اسنا</option>
                      </select>
                      <select class="form-select" id="quena" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="markez_quena">مركز قنا</option>
                      </select>
                      <select class="form-select" id="banisuef" aria-label="Default select example" style="display:none">
                        <option selected="" disabled>حدد المنطقة</option>
                        <option value="madinat_banisuef">مدينة بني سويف</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="search">
                <button class="btn btn-primary" type="button"><i class="fas fa-search-location"></i>ابحث</button>
              </div>
            </div>
          </div>
        </div>
        <!--end seslect lawyer-->
        <!--start footer-->
        <footer>
          <div class="fot text-center">
            <div class="container">
              <div class="info">
                <div class="row">
                  <div class="col-lg-3 col-md-6 app">
                    <h2>احصل علي التطبيق</h2>
                    <a href="/" ><img src="./images/google.png"></a>
                    <ul class="social">
                      <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="/"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 help">
                    <h2>مساعدة</h2>
                    <ul>
                      <li><a href="./contact.html" >تواصل معنا</a></li><br>
                      <li><a href="/" >شروط الاستخدام</a></li><br>
                      <li><a href="/" >الخصوصية</a></li><br>
                      <li><a href="./specializization.html" >اعرف التخصصات</a></li><br>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 lawyer">
                    <h2>انضم لمحاميك</h2>
                    <ul>
                      <li><a href="/">هل انت محامي؟</a></li>
                    </ul>
                    
                  </div>
                  <div class="col-lg-3 col-md-6 logo">
                    <a href="index2.html"><img src="lawyerDashboard/src/img/logo.png" alt="محاميك"></a>
                    <ul>
                      <li><a href="/">فريق محاميك</a></li><br>
                      <li><a href="/">معلومات عنا</a></li>
                    </ul>
                  </div>
          
                </div>
              </div>
            </div>
            
          </div>
        </footer>
        <!--start footer-->
        <!-- JavaScript Bundle with Popper -->
        <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
        <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/javascript/js.js')}}"></script>
    </body>
</html>