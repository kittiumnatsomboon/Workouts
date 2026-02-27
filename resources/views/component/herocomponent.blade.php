<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @extends('component.header')
</head>
<body>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <h2 class="text-white">ยินดีต้อนรับ </h2>
                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                        <span>เว็บไซต์จัดตารางออกกำลังกาย</span>
                        <span class="cd-words-wrapper">
                            <b>Creative</b>
                            <b>Lifestyle</b>
                        </span>
                    </h1>
                    <div class="custom-btn-group">
                        <a href="#section_2" class="btn custom-btn smoothscroll me-3">เริ่มต้นกันเลย</a>

                        <a href="#section_3" class="link smoothscroll">เกี่ยวกับเรา</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ratio ratio-16x9">
                        <iframe width="337" height="599" src="https://www.youtube.com/embed/okE7t4EgrGI" title="aboutevideo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>