<div class="content-wrap bg-light">

    <div class="container clearfix">

        <div class="row justify-content-center">
            <div class="row col-mb-50 mb-0 card my-5 shadow-sm" style="flex-direction:inherit">
                <div class="card-body p-5">

                    <h4 class="ls4 center">Нумерология</h4>

                    <div class="divider divider-sm divider-center text-dark"><i class="icon-star-of-david"></i></div>

                </div>

                <!-- Charts Area ============================================= -->

                <div class="col-md-1-5">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Имя</td>
                            <td><?=$name?></td>
                        </tr>
                        <tr>
                            <td>Дата</td>
                            <td><?=$params['birthday']?></td>
                        </tr>
                        <tr>
                            <td>Знак</td>
                            <td><?=$params['sign']?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Возраст</td>
                            <td><?=$params['age']?></td>
                        </tr>
                        <tr>
                            <td>Метапрограмма</td>
                            <td><?=$params['metaprogramm']?></td>
                        </tr>
                        <tr>
                            <td>Психотип</td>
                            <td><?=$params['psychotype']?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-1-5">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Метацикл</td>
                            <td width="20%"><?=$params['metacycle']?></td>
                        </tr>
                        <tr>
                            <td>Субметацикл</td>
                            <td><?=$params['submetacycle']?></td>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Базовое число</td>
                            <td width="20%"><?=$params['baseNumber']?></td>
                        </tr>
                        <tr>
                            <td>Коммуникативное</td>
                            <td><?=$params['communicative']?></td>
                        </tr>
                        <tr>
                            <td>Уровень развития</td>
                            <td><?=$params['developmentLevel']?></td>
                        </tr>
                        <tr>
                            <td>Число имени</td>
                            <td><?=$params['nameNumber']?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-1-5">
                    <table class="table table-bordered table-narrow js-table-fill">
                        <tbody>
                        <tr>
                            <td width="33%"><?=$params['matrix'][1] ?? '-'?></td>
                            <td><?=$params['matrix'][4] ?? '-'?></td>
                            <td width="33%"><?=$params['matrix'][7] ?? '-'?></td>
                        </tr>
                        <tr>
                            <td><?=$params['matrix'][2] ?? '-'?></td>
                            <td><?=$params['matrix'][5] ?? '-'?></td>
                            <td><?=$params['matrix'][8] ?? '-'?></td>
                        </tr>
                        <tr>
                            <td><?=$params['matrix'][3] ?? '-'?></td>
                            <td><?=$params['matrix'][6] ?? '-'?></td>
                            <td><?=$params['matrix'][9] ?? '-'?></td>
                        </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 19px;">Отраженная матрица</p>
                    <table class="table table-bordered table-narrow">
                        <tbody>
                        <tr>
                            <td width="33%"><?=$params['reflectedMatrix'][1] ?? '-'?></td>
                            <td><?=$params['reflectedMatrix'][4] ?? '-'?></td>
                            <td width="33%"><?=$params['reflectedMatrix'][7] ?? '-'?></td>
                        </tr>
                        <tr>
                            <td><?=$params['reflectedMatrix'][2] ?? '-'?></td>
                            <td><?=$params['reflectedMatrix'][5] ?? '-'?></td>
                            <td><?=$params['reflectedMatrix'][8] ?? '-'?></td>
                        </tr>
                        <tr>
                            <td><?=$params['reflectedMatrix'][3] ?? '-'?></td>
                            <td><?=$params['reflectedMatrix'][6] ?? '-'?></td>
                            <td><?=$params['reflectedMatrix'][9] ?? '-'?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-1-5">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Количество нулей в </br>матрице</td>
                            <td width="30%"><?=$params['matrix'][0] ?? '-'?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Количество нулей в </br>отраженной матрице</td>
                            <td width="30%"><?=$params['reflectedMatrix'][0] ?? '-'?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-1-5">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td rowspan="2">Доп. функции графика ЖС</td>
                            <td width="30%"></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Год для графика </br>жизненных сил на год</td>
                            <td width="30%"><?= date('Y')?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-100"></div>

                <div class="bottommargin mx-auto" style="min-height: 350px;">
                    <canvas id="chart-0"></canvas>
                </div>

                <div class="col-md-6">
                    <div class="bottommargin mx-auto" style="max-width: 750px; min-height: 350px;">
                        <canvas id="chart-1"></canvas>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bottommargin mx-auto" style="max-width: 750px; min-height: 350px;">
                        <canvas id="chart-2"></canvas>
                    </div>
                </div>
                <!-- Charts Area End -->

                <div class="col-12" style="text-align: center">
                    <a href="/" class="btn btn-secondary w-50 btn-lg">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
