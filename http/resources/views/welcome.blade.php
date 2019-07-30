@extends('master.defaultMaster')

@section('title')
    Clone Coding
@endsection

@section('script')
    <script src="/js/welcome.js"></script>
@endsection

@section('body')
    <div class='main-container'>
        <div class='haeder-content master'>
            <div class='haeder-pannel slave'>
                <img class='logo' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/logo.png" alt="">
                <div class='text-container'>
                    <h1 class='title font-white-sans-900'>원페이지 웹사이트</h1>
                    <span class='body font-white-sans-400'>페이지의 이동 없이 첫화면에 모든 정보를 제공하는 웹사이트</span>
                </div>
                <img class='product' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/main-product.png" alt="">
            </div>
        </div>

        <div class='alt-content master'>
            <div class='alt-container slave'>
                <div class='alt-pannel'>
                    <div class='title font-666-dancing-900'>Gallery</div>
                    <div class='body font-666-sans-400'>이것은 예제 설명문안입니다. 사이트 방문자들에게 제품 또는 서비스의 특징을 소개하기 위한 설명문안을 입력합니다.</div>
                </div>
                <img class='logo-2' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/gallery-icon.png" alt="">
            </div>
        </div>

        <div class='gallery-content'>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10PM6.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>후추</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10KY8.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>책과 여유</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10K6M.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>원두커피의 효능</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10JP6.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>레드와인</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10HKH.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>커피와 초콜릿</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10HE0.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>자전거</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10H7Q.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>커피한잔</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
            <div class='gallery' mm='http://wonpage.co.kr/wonpagegallery/wp-content/uploads/sites/8/2014/12/02A10BRY.jpg'>
                <img class='_shadow' src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/overlay.png" alt="">
                <div class='_hover hidden'>
                    <div class='title font-white-sans-400'>나무의 나이테</div>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/readmore.png" alt="">
                </div>
            </div>
        </div>

        <div class='post-content'>
            <div class='post-container'>
                <div class='post'>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/service-1.png" alt="">
                    <div class='body-container'>
                        <div class='title font-666-na-myeong-900'>첫번째 서비스 타이틀</div>
                        <div class='body font-666-sans-400'>이것은 첫번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                    </div>
                </div>
                <div class='post'>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/service-2.png" alt="">
                    <div class='body-container'>
                        <div class='title font-666-na-myeong-900'>두번째 서비스 타이틀</div>
                        <div class='body font-666-sans-400'>이것은 두번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                    </div>
                </div>
                <div class='post'>
                    <img src="http://wonpage.co.kr/wonpagegallery/wp-content/themes/wonpagegallery/images/service-3.png" alt="">
                    <div class='body-container'>
                        <div class='title font-666-na-myeong-900'>세번째 서비스 타이틀</div>
                        <div class='body font-666-sans-400'>이것은 세번째 예제 설명문안입니다. 사이트 방문자들에게 서비스를 소개하기 위한 핵심내용을 입력합니다.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='gallery-show hidden'>
        <img class='screen'>
    </div>

    @component('footer.defaultFooter')
        
    @endcomponent
@endsection