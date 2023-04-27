<div class="benefits-popup">
    <div class="benefits-popup-content-wrapper">
        <button class="benefits-close">
            <svg clip-rule="evenodd"
                 fill-rule="evenodd"
                 stroke-linejoin="round"
                 stroke-miterlimit="2"
                 viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                      d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" />
            </svg>
        </button>
        <div class="benefits-popup-content step step-1 animate__animated animate__fadeIn">
            <div class="step-desc">
                <h2 class="font-extrabold text-xl md:text-3xl mb-7 text-secondary text-center">
                    Wybierz zasoby które
                    <br>
                    <span class="text-dark">
                        chcesz objąć monitoringiem
                    </span>
                </h2>
            </div>
            <div class="step-progress max-w-3xl mx-auto mb-10 flex items-center">
                <div class="text-secondary text-xl mr-3">
                    0%
                </div>
                <div class="w-full h-2 bg-l-gray bg-opacity-50 rounded-full">

                </div>
            </div>
            <div class="step-pick grid grid-cols-4 gap-5 md:gap-10">
                <?php foreach (get_field("step_1", "options") as $key => $step) : ?>
                <label for="<?php echo "step_1-" . $key ?>"
                       class="step-option step-big-chkbx col-span-4 md:col-span-2 lg:col-span-1">
                    <input class="hidden"
                           type="checkbox"
                           name="step_1"
                           id="step_1-<?php echo $key ?>"
                           value="<?php echo wp_strip_all_tags($step["name"], true) ?>">
                    <figure>
                        <img src="<?php echo $step["img"] ?>"
                             alt="<?php echo $step["name"]; ?>">
                    </figure>
                    <span><?php echo $step["name"]; ?></span>
                    <div class="check">
                        <?php echo file_get_contents(THEME_IMG . "check.svg") ?>
                    </div>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="step-end mt-10 text-center">
                <button class="btn btn--primary btn--wider disabled"
                        data-proceed="2">
                    Dalej
                </button>
            </div>
        </div>
        <div class="benefits-popup-content step step-2 hidden animate__animated animate__fadeIn">
            <div class="step-desc">
                <h2 class="font-extrabold text-xl md:text-3xl mb-5 text-secondary text-center">
                    Wybierz
                    <br>
                    <span class="text-dark">
                        obszar monitorowania
                    </span>
                </h2>
            </div>
            <div class="step-progress max-w-3xl mx-auto mb-10 flex items-center">
                <div class="text-secondary text-xl mr-3">
                    25%
                </div>
                <div
                     class="w-full h-2 bg-l-gray bg-opacity-50 rounded-full relative after:absolute after:top-0 after:left-0 after:h-full after:w-1/4 after:bg-secondary after:rounded-full">

                </div>
            </div>
            <div class="step-pick grid grid-cols-4 gap-5 md:gap-10">
                <?php foreach (get_field("step_2", "options") as $key => $step) : ?>
                <label for="<?php echo "step_2-" . $key ?>"
                       class="step-option step-big-chkbx col-span-4 md:col-span-2 lg:col-span-1">
                    <input class="hidden"
                           type="radio"
                           name="step_2"
                           id="step_2-<?php echo $key ?>"
                           value="<?php echo wp_strip_all_tags($step["name"], true) ?>">
                    <figure>
                        <img src="<?php echo $step["img"] ?>"
                             alt="<?php echo $step["name"]; ?>">
                    </figure>
                    <span><?php echo $step["name"]; ?></span>
                    <div class="check">
                        <?php echo file_get_contents(THEME_IMG . "check.svg") ?>
                    </div>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="step-end mt-10 text-center grid items-center justify-center grid-cols-1 gap-5">
                <button class="btn btn--primary btn--wider mx-auto disabled"
                        data-proceed="3">
                    Dalej
                </button>
                <button class="btn--return"
                        data-proceed="1">
                    Powrót
                </button>
            </div>
        </div>
        <div class="benefits-popup-content step step-3 hidden animate__animated animate__fadeIn">
            <div class="step-desc">
                <h2 class="font-extrabold text-xl md:text-3xl mb-5 text-secondary text-center">
                    Ilość zasobów do
                    <br>
                    <span class="text-dark">
                        monitorowania lub wielkość floty
                    </span>
                </h2>
            </div>
            <div class="step-progress max-w-3xl mx-auto mb-10 flex items-center">
                <div class="text-secondary text-xl mr-3">
                    50%
                </div>
                <div
                     class="w-full h-2 bg-l-gray bg-opacity-50 rounded-full relative after:absolute after:top-0 after:left-0 after:h-full after:w-1/2 after:bg-secondary after:rounded-full">

                </div>
            </div>
            <div class="step-pick grid grid-cols-1 max-w-lg mx-auto gap-5">
                <?php foreach (get_field("step_3", "options") as $key => $step) : ?>
                <label for="<?php echo "step_3-" . $key ?>"
                       class="step-option step-big-chkbx">
                    <input class="hidden"
                           type="radio"
                           name="step_3"
                           id="step_3-<?php echo $key ?>"
                           value="<?php echo wp_strip_all_tags($step["name"], true) ?>">
                    <span><?php echo $step["name"]; ?></span>
                    <div class="check">
                        <?php echo file_get_contents(THEME_IMG . "check.svg") ?>
                    </div>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="step-end mt-10 text-center grid items-center justify-center grid-cols-1 gap-7">
                <button class="btn btn--primary btn--wider mx-auto disabled"
                        data-proceed="4">
                    Dalej
                </button>
                <button class="btn--return"
                        data-proceed="2">
                    Powrót
                </button>
            </div>
        </div>
        <div class="benefits-popup-content step step-4 hidden animate__animated animate__fadeIn">
            <div class="step-desc">
                <h2 class="font-extrabold text-xl md:text-3xl mb-7 text-secondary text-center">
                    Wybierz kluczowe
                    <br>
                    <span class="text-dark">
                        dla siebie funkcjonalności
                    </span>
                </h2>
            </div>
            <div class="step-progress max-w-3xl mx-auto mb-10 flex items-center">
                <div class="text-secondary text-xl mr-3">
                    75%
                </div>
                <div
                     class="w-full h-2 bg-l-gray bg-opacity-50 rounded-full relative after:absolute after:top-0 after:left-0 after:h-full after:w-3/4 after:bg-secondary after:rounded-full">

                </div>
            </div>
            <div class="step-pick grid grid-cols-4 gap-5 md:gap-10">
                <?php foreach (get_field("step_4", "options") as $key => $step) : ?>
                <label for="<?php echo "step_4-" . $key ?>"
                       class="step-option step-big-chkbx col-span-4 md:col-span-2 lg:col-span-1">
                    <input class="hidden"
                           type="checkbox"
                           name="step_4"
                           id="step_4-<?php echo $key ?>"
                           value="<?php echo wp_strip_all_tags($step["name"], true) ?>">
                    <figure>
                        <img src="<?php echo $step["img"] ?>"
                             alt="<?php echo $step["name"]; ?>">
                    </figure>
                    <span><?php echo $step["name"]; ?></span>
                    <div class="check">
                        <?php echo file_get_contents(THEME_IMG . "check.svg") ?>
                    </div>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="step-end mt-10 text-center grid items-center justify-center grid-cols-1 gap-5">
                <button class="btn btn--primary btn--wider mx-auto disabled"
                        data-proceed="5">
                    Dalej
                </button>
                <button class="btn--return"
                        data-proceed="3">
                    Powrót
                </button>
            </div>
        </div>
        <div class="benefits-popup-content step step-5 hidden animate__animated animate__fadeIn">
            <div class="step-desc">
                <h2 class="font-extrabold text-xl md:text-3xl mb-5 text-secondary text-center">
                    Podaj swoje dane, abyśmy mogli przygotować,
                    <br>
                    <span class="text-dark">
                        dla Ciebie ofertę i dopytać o szczegóły
                    </span>
                </h2>
            </div>
            <div class="step-progress max-w-3xl mx-auto mb-10 flex items-center">
                <div class="text-secondary text-xl mr-3">
                    100%
                </div>
                <div
                     class="w-full h-2 bg-l-gray bg-opacity-50 rounded-full relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-secondary after:rounded-full">

                </div>
            </div>
            <div class="step-pick grid grid-cols-2 max-w-3xl mx-auto gap-7">
                <div class="col-span-2 md:col-span-1">
                    <label for="step_email"
                           class="block w-full">
                        <input name="step_email"
                               type="email"
                               placeholder="wpisz swój adres e-mail*"
                               class="w-full placeholder:text-d-gray/60 text-dark/60  border border-l-gray border-opacity-50 rounded-xl px-8 py-3">
                        <span class="hidden mt-2">
                            Wpisz poprawny email (np. addr@mail.pl)
                        </span>
                    </label>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="step_tel"
                           class="block w-full">
                        <input name="step_tel"
                               type="tel"
                               placeholder="wpisz numer telefonu*"
                               class="w-full placeholder:text-d-gray/60 text-dark/60  border border-l-gray border-opacity-50 rounded-xl px-8 py-3">
                        <span class="hidden mt-2">
                            Wpisz poprawny nr. telefonu (np. 123456789)
                        </span>
                    </label>
                </div>
                <div class="col-span-2">
                    <label for="stem_firm"
                           class="block w-full">
                        <input name="step_firm"
                               type="text"
                               placeholder="wpisz nazwę firmy"
                               class="w-full placeholder:text-d-gray/60 text-dark/60  border border-l-gray border-opacity-50 rounded-xl px-8 py-3">
                    </label>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="step_name"
                           class="block w-full">
                        <input name="step_name"
                               type="text"
                               placeholder="wpisz swoje imię*"
                               class="w-full placeholder:text-d-gray/60 text-dark/60  border border-l-gray border-opacity-50 rounded-xl px-8 py-3">
                    </label>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="step_lName"
                           class="block w-full">
                        <input name="step_lName"
                               type="text"
                               placeholder="wpisz swoje nazwisko*"
                               class="w-full placeholder:text-d-gray/60 text-dark/60  border border-l-gray border-opacity-50 rounded-xl px-8 py-3">
                    </label>
                </div>
            </div>
            <div class="step-end mt-10 text-center grid items-center justify-center grid-cols-1 gap-5">
                <button class="btn btn--primary btn--wider mx-auto disabled"
                        data-proceed="6">
                    Dalej
                </button>
                <button class="btn--return"
                        data-proceed="4">
                    Powrót
                </button>
            </div>
        </div>
        <div class="benefits-popup-content step step-6 hidden  animate__animated animate__fadeIn">
            <div class="grid grid-cols-12 gap-y-10 md:gap-10 items-center">
                <div class="col-span-12 md:col-span-6">
                    <figure class="w-full">
                        <img src="<?php echo THEME_IMG . "rozwiazania_samoloty_02.png" ?>"
                             alt="">
                    </figure>
                </div>
                <div class="hidden md:block">

                </div>
                <div class="col-span-12 md:col-span-5">
                    <h2 class="font-extrabold text-2xl md:text-4xl mb-5 text-secondary">
                        Zespół SignatiGPS <br>
                        <span class="text-dark">
                            dziękuje za zapytanie!
                        </span>
                    </h2>
                    <p class="my-5 text-dark">
                        Nasi zaangażowani konsultanci przeanalizują potrzeby i skontaktują się z Tobą aby dopytać o
                        szczegóły i przedstawić ofertę odpowiadającą potrzebom Twojej firmy.
                    </p>
                    <a href="/urzadzenia"
                       class="steps-link font-bold text-primary flex items-center hover:text-secondary transition-all">
                        <span class="text-primary">Kontynuj przeglądanie oferty</span>
                        <figure class="h-3 ml-3 text-primary hover:text-secondary">
                            <?php echo file_get_contents(THEME_IMG . "arrow.svg") ?>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>