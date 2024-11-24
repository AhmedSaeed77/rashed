@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
?>
@section('content')

<section class="vision-page body-inner">
    <div class="container">
        <div class="homeSolutions__introContent">
            <div class="homeSolutions__content2">
                <div class="homeSolutions__tiles2">
                    <div class="homeSolutions__tile2">
                        <div class="items-block">
                            <!-- Item -->
                            <div class="item">
                                <div class="details">
                                    <h3>رؤية 2030</h3>
                                    <p>
                                        توافق رؤية المؤسسة مع رؤية المملكة 2030
                                    </p>
                                </div>
                            </div>
                            <!-- /Item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeSolutions__info2">
                 <div class="homeSolutions__tile2">
                    <div class="items-block">
                        <!-- Item -->
                        <div class="item">
                            <div class="icon">
                                <img src="http://khira.azq1.com/rashid/public/storage/infos/February2021/5SPoxCfZYl1x5nYDobd2.png">
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
