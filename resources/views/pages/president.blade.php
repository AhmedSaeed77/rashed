@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
?>
@section('content')


<section class="president-page body-inner">
    <div class="container">
        <div class="homeImageText__inner">
            <div class="homeImageText__image3">
                <img src="http://khira.azq1.com/rashid/public/storage/infos/February2021/uauRb6uAWGyKHn8HhBbJ.jpeg" alt="" class="homeImageText__img">
            </div>
            
            <div class="homeImageText__info3">
                <div class="homeImageText__head">
                    <h2 class="homeImageText__title">
                       كلمة رئيس مجلس الأمناء <br> (الشيخ عبدالمنعم الراشد)
                    </h2>
                </div>
                <div class="homeImageText__text">
                    <p>
                        تسعى مؤسسة عبدالمنعم الراشــد الإنســـانيــة إلــى المسـاهمـة فــي تنميـة  المجتمـــع مـن خــلال مبــادراتهــــا، الـتــي تعكــس رؤيــة الــمـؤسســـة فــي تعزيــز مكانتهـــا كإحــــدى أهم المـــؤسســـات فــي المجتمع وشريكاً أساسياً للعديد من الجمعيات واللجـان الاجتماعية المحلية و الدولية التي تتبنـى نفــس المبــادئ. وقد تمحور اهتمــام المؤسسة على التنميــة البشريـــة وبنـاء الإنسـان علـــى جميـع الأصعدة، وذلك من خلال المبــادرات والأنشطـــة التـي تهـدف إلى التطويـــر المجتمعـي. كمـــا تؤمـن المؤسسة بقدرتها على إحداث تغيير إيجابي وصنع فــارق وأثر في المجتمــع من خلال تمكين أفراد المجتمع وإتاحة الفرصة لهم للنمو والازدهار .
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection