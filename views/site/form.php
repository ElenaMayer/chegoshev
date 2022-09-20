<?php

$this->title = 'Нумерология';
?>

<div class="content-wrap bg-light">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
                <div class="card my-5 shadow-sm">
                    <div class="card-body p-5">

                        <h4 class="ls4 center">Нумерология</h4>

                        <div class="divider divider-sm divider-center text-dark"><i class="icon-star-of-david"></i></div>

                        <div class="form-widget" data-alert-type="false">

                            <div class="form-result"></div>

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-double-bounce1"></div>
                                    <div class="css3-spinner-double-bounce2"></div>
                                </div>
                            </div>

                            <form class="mb-0" method="get" action="index.php">

                                <div class="row">

                                    <div class="col-12 center mb-5">
                                        <h6 class="font-body text-uppercase ls3">Расчет карты</h6>
                                        <h2 class="font-secondary fst-italic h1">Ваши данные</h2>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Имя</label>
                                                <input type="text" class="form-control required" name="name">
                                            </div>
                                            <div class="col-lg-6 bottommargin">
                                                <label>Дата рождения</label>
                                                <input type="text" class="form-control daterange3 format required" value="01/01/1990" name="birthday"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success w-100 btn-lg">Расчитать</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
