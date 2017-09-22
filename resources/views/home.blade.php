@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    <div class="parallax-container" style="min-height: 90vh;">
        <div style="max-width: 50%;
                    float: right;
                    margin-top: 170px;
                    color: #fff;">
            <h1>Мы создаем умные решения для бизнеса</h1>
            <a href="#callback_form" class="btn-large white-text" style="background-color: #A17D45;min-width: 45%;">Узнать о предложении</a>
            <a href="#mail_consult" class="btn-large" style="border: 2px solid #A17D45;background-color: #fff;min-width: 45%;color: #A17D45;">Задать вопрос</a>
        </div>
        <div class="parallax"><img src="img/parallax1.jpg"></div>
    </div>

    <div class="col s12" style="color: #A17D45;margin-top: 80px;">
        <div class="container div row">
            <h4 class="center" style="font-size: 50px;font-family: Roboto;padding-top: 40px;padding-bottom: 10px;">НАШИ РЕШЕНИЯ</h4>
            <hr style="height: 2px;background-color: #A17D45;width: 150px;">
            <p class="center" style="margin-top: 30px;">
                В основе нашей работы лежат следующие принципы: каждое решение должно в разы сокращать затраты компании,
                по возможности полностью исключать человеческий фактор, максимально полно автоматизировать рабочие процессы.
            </p>
            <div class="col s3">
                <h5 class="center">Отраслевые решения</h5>
                <p>Каждая из отраслей экономики имеет свою специфику, когда типовые решения в виде
                    бухгалтерских программ, CRM, ERP и других систем не решают поставленных задач.
                    Наши разработки направлены на решения подходящие для конкретной отрасли, исходя из
                    ее уникальных задач и учитывают
                    все специфические особенности и проблемы данной отрасли.
                </p>
            </div>
            <div class="col s3">
                <h5 class="center">Безопасность бизнеса</h5>
                <p>Современный бизнес сталкивается с различными угрозами, как с внешними, так и с внутренними.
                Работа с поставщиками и покупателями, касающаяся гарантий исполнения обязательств. Работа с
                    контролирующими органами, всевозможные проверки, "черные списки", слишком пристальное внимание
                    к организации. Работа с сотрудниками: мелкие кражи уже утратили свою актуальность и на смену им
                    пришли куда более серьезные угрозы - кража клиентской базы, взятки и выводы активов, промышленный шпионаж -
                    когда у вашей компании воруют решения или идеи.
                    Это очень серьезный вопрос для каждой компании.
                </p>
            </div>
            <div class="col s3">
                <h5 class="center">Финансовый консалтинг</h5>
                <p></p>
            </div>
            <div class="col s3">
                <h5 class="center"><a href="{{ url('servises/') }}" style="color: #A17D45;">Системы документооборота</a></h5>
                <p>Любой организации от корпораций до небольших компаний, приходится сталкиваться с каждодневной рутинной работой:
                - оформление договоров, составление писем, соглашений, актов и прочих документов. Каждая компания, любыми способами
                    стремится сократить объем документов, применяя для этих целей различные инструменты. Решения, которые предлагаем мы,
                    основываются на следующих "китах":
                    - сокращение повторяющихся действий,
                    - сведение к минимуму печатных документов,
                    - упорядочение и структурирование хранения документов,
                    - архивирование и безопасность хранения документов.
                </p>
            </div>
            <div class="col s3">
                <h5 class="center">Бухгалтерский аутсорсинг</h5>
            </div>
            <div class="col s3">
                <h5 class="center">Кадровый аутсорсинг</h5>
                <p></p>
            </div>
            <div class="col s3">
                <h5 class="center">Программы обучения</h5>
            </div>
            <div class="col s3">
                <h5 class="center">Экологическая безопасность</h5>
            </div>
            <div class="col s3">
                <h5 class="center">Охрана труда</h5>
            </div>
        </div>
    </div>

    <div class="parallax-container" style="min-height: 90vh;">
        <div style="max-width: 40%;
                    float: left;
                    margin-top: 200px;
                    margin-left: 50px;
                    color: #fff;">
            <h2>Сохраните свое время и деньги с нашими решениями</h2>
            <a href="#callback_form" class="btn-large white-text" style="background-color: #A17D45;min-width: 45%;">Узнать о предложении</a>
            <a href="#mail_consult" class="btn-large" style="border: 2px solid #A17D45;background-color: #fff;min-width: 45%;color: #A17D45;">Задать вопрос</a>
        </div>
        <div class="parallax"><img src="{{ asset('img/parallax3.jpg') }}" alt=""></div>
    </div>

    <div class="col s12" style="color: #A17D45;margin-top: 80px;">
        <div class="container">
            <div class="row">
                <h4 class="center" style="font-size: 50px;font-family: Roboto;padding-bottom: 10px;">Статьи</h4>
                <hr style="height: 2px;background-color: #A17D45;width: 150px;">
                <p>
                    Подчас, бизнесу сложно решиться на те или иные нововведения, это кажется сложным и затратным, к тому же,
                    часто, приобретая какой-то продукт, который должен решать четко поставленные задачи, он не оправдывает своих
                    ожиданий. Чаще всего такое случается из-за не знания или не полного предствления о продукте. Мы ценим время и деньги
                    своих клиентов, поэтому для каждого из решений готовим не только описание функционала, но и подробно, в статьях рассказываем
                    о всех плюсах и минусах этих решений.
                </p>
                @foreach($articles as $article)
                    @include('cards.main_page_article')
                    @endforeach
            </div>
        </div>
    </div>
    @include('helpers.map')

            @include('helpers.forms.callback_modal', ['url' => 'callback/order', 'title' => 'Общая консультация'])

@endsection
