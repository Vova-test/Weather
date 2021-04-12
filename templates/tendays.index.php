<?php require_once(ROOT_PATH . "/templates/partials/header.php"); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-lg-9 col-xl-8 block-ten">
                <div class="row">
                    <div class="col-12 pg-15-30">
                        <h1 class="h-1">
                            <strong><?php echo $mainTag['mainTitle']; ?></strong>
                            <span class="span-1"> -
                            <span>
                                <?php echo $mainTag['city']; ?>
                            </span>
                        </span>
                        </h1>
                        <div class="opacity-1"><?php echo $mainTag['time']; ?></div>
                    </div>
                </div>
                <?php foreach ($mainTag['days'] as $day): ?>
                    <div class="row">
                        <div class="col-12">
                            <details <?php echo $day['open'] ? "open" : ""; ?>>
                                <summary class="Disclosure--Summary--AvowU">
                                    <div class="Disclosure--SummaryDefault--1z_mF">
                                        <div class="col">
                                            <div class="row pg-top-5">
                                                <div class="col-2 pr-0">
                                                    <h2 class="h2-fs1"><?php echo $day['summary']['date']; ?></h2>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span><strong><?php echo $day['summary']['temp1']; ?></strong></span>
                                                    <span data-testid="lowTempValue">/
                                                    <span data-testid="TemperatureValue"
                                                          class="DetailsSummary--lowTempValue--1DlJK">
                                                        <?php echo $day['summary']['temp2']; ?>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="col-5 p-0">
                                                    <div data-testid="wxIcon" class="DetailsSummary--condition--mqdxh">
                                                        <svg aria-hidden="true"
                                                             class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DetailsSummary--wxIcon--1uj4L"
                                                             set="weather" skycode="33" theme="full" name=""
                                                             data-testid="Icon" role="img" viewBox="0 0 200 200">
                                                            <title>Mostly Clear Night</title>
                                                            <use xlink:href="#svg-symbol-moon"
                                                                 transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                                                 mask="url(#mostly-clear-night-mask)"></use>
                                                            <use xlink:href="#svg-symbol-cloud"
                                                                 transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                                        </svg>
                                                        <span class="DetailsSummary--extendedData--aaFeV">
                                                        <?php echo $day['summary']['text']; ?>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <div data-testid="Precip" class="DetailsSummary--precip--2ARnx">
                                                        <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--precipIcon--2eEZg"
                                                             set="heads-up" name="precip-rain-single" theme="action"
                                                             data-testid="Icon" aria-label="Імовірність дощу"
                                                             aria-hidden="false" role="img" viewBox="0 -2 5 10">
                                                            <title>Rain</title>
                                                            <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                                        </svg>
                                                        <span data-testid="PercentageValue">
                                                        <?php echo $day['summary']['percent']; ?>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="col-3 p-0">
                                                    <div data-testid="wind"
                                                         class="DetailsSummary--wind--Cv4BH DetailsSummary--extendedData--aaFeV">
                                                        <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--conditionsIcon--26Lme"
                                                             set="current-conditions" name="wind" theme="action"
                                                             data-testid="Icon" aria-label="Вітер" aria-hidden="false"
                                                             role="img" viewBox="0 0 24 24">
                                                            <title>Wind</title>
                                                            <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                                  stroke-width="2" stroke="currentColor"
                                                                  stroke-linecap="round" fill="none"></path>
                                                        </svg>
                                                        <span data-testid="Wind"
                                                              class="Wind--windWrapper--1Va1P undefined">
                                                        <?php echo $day['summary']['windText']; ?>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <svg set="ui" name="caret-down"
                                             class="Icon--icon--2AbGu Disclosure--SummaryIcon--29HFk" theme=""
                                             data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24">
                                            <title>Arrow Down</title>
                                            <path d="M12 16.086l7.293-7.293a1 1 0 1 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-8-8a1 1 0 1 1 1.414-1.414L12 16.086z"></path>
                                        </svg>
                                    </div>
                                </summary>
                                <div class="row">
                                    <?php //foreach ($day['details'] as $timeOfDay): ?>

                                    <?php if (isset($day['details'][1])): ?>
                                        <div class="col-12 col-md-6">
                                            <div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg">
                                                <div data-testid="DailyContent"
                                                     class="DailyContent--DailyContent--rTQY_">
                                                    <h3 class="DailyContent--daypartName--3G5Y8">
                                                    <span class="DailyContent--daypartDate--3MM0J">
                                                        <?php echo $day['details'][0]['timeDay']; ?>
                                                    </span>
                                                        <?php echo $day['details'][0]['timeName']; ?>
                                                    </h3>
                                                    <div data-testid="ConditionsSummary"
                                                         class="DailyContent--ConditionSummary--2vnrT">
                                                        <div>
                                                        <span data-testid="TemperatureValue"
                                                              class="DailyContent--temp--_8DL5">
                                                            <?php echo $day['details'][0]['temp']; ?>
                                                        </span>
                                                        </div>
                                                        <div data-testid="weatherIcon"
                                                             class="DailyContent--Condition--3fAIb">
                                                            <svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5"
                                                                 set="weather" skycode="33" theme="full" name=""
                                                                 data-testid="Icon"
                                                                 aria-label="Переважно безхмарно"
                                                                 aria-hidden="false" role="img"
                                                                 viewBox="0 0 200 200">
                                                                <title>Mostly Clear Night</title>
                                                                <use xlink:href="#svg-symbol-moon"
                                                                     transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                                                     mask="url(#mostly-clear-night-mask)"></use>
                                                                <use xlink:href="#svg-symbol-cloud"
                                                                     transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="DailyContent--dataPoints--3fymE">
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <div class="DailyContent--rainIconBlock--3JIMK">
                                                                    <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG"
                                                                         theme="action" set="heads-up"
                                                                         name="precip-rain-single"
                                                                         data-testid="Icon"
                                                                         aria-label="Імовірність дощу"
                                                                         aria-hidden="false" role="img"
                                                                         viewBox="0 -2 5 10">
                                                                        <title>Rain</title>
                                                                        <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                                                    </svg>

                                                                </div>
                                                                <span data-testid="PercentageValue"
                                                                      class="DailyContent--value--3Xvjn"><?php echo $day['details'][0]['percent']; ?></span>
                                                            </div>
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <svg arialabel="Вітер"
                                                                     class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj"
                                                                     theme="action" set="current-conditions"
                                                                     name="wind"
                                                                     data-testid="Icon" aria-hidden="true"
                                                                     role="img"
                                                                     viewBox="0 0 24 24">
                                                                    <title>Wind</title>
                                                                    <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                                          stroke-width="2" stroke="currentColor"
                                                                          stroke-linecap="round"
                                                                          fill="none"></path>
                                                                </svg>
                                                                <span data-testid="Wind"
                                                                      class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn"><?php echo $day['details'][0]['windText']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p data-testid="wxPhrase"
                                                       class="DailyContent--narrative--3AcXd"><?php echo $day['details'][0]['description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6  order-md-3">
                                            <div class="row pg-x-15">
                                                <div col-5><span>Вологість <span>58%</span></span></div>
                                                <div col-5><span>УФ-індекс <span>0 з 10</span></span></div>
                                                <div col-5><span>Схід Сонця <span>7:27</span></span></div>
                                                <div col-5><span>Захід <span>23:13</span></span></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 order-md-2">
                                            <div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg">
                                                <div data-testid="DailyContent"
                                                     class="DailyContent--DailyContent--rTQY_">
                                                    <h3 class="DailyContent--daypartName--3G5Y8">
                                                <span class="DailyContent--daypartDate--3MM0J">
                                                    <?php echo $day['details'][1]['timeDay']; ?>
                                                </span>
                                                        <?php echo $day['details'][1]['timeName']; ?>
                                                    </h3>
                                                    <div data-testid="ConditionsSummary"
                                                         class="DailyContent--ConditionSummary--2vnrT">
                                                        <div>
                                                    <span data-testid="TemperatureValue"
                                                          class="DailyContent--temp--_8DL5">
                                                        <?php echo $day['details'][1]['temp']; ?>
                                                    </span>
                                                        </div>
                                                        <div data-testid="weatherIcon"
                                                             class="DailyContent--Condition--3fAIb">
                                                            <svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5"
                                                                 set="weather" skycode="33" theme="full" name=""
                                                                 data-testid="Icon"
                                                                 aria-label="Переважно безхмарно"
                                                                 aria-hidden="false" role="img"
                                                                 viewBox="0 0 200 200">
                                                                <title>Mostly Clear Night</title>
                                                                <use xlink:href="#svg-symbol-moon"
                                                                     transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                                                     mask="url(#mostly-clear-night-mask)"></use>
                                                                <use xlink:href="#svg-symbol-cloud"
                                                                     transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="DailyContent--dataPoints--3fymE">
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <div class="DailyContent--rainIconBlock--3JIMK">
                                                                    <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG"
                                                                         theme="action" set="heads-up"
                                                                         name="precip-rain-single"
                                                                         data-testid="Icon"
                                                                         aria-label="Імовірність дощу"
                                                                         aria-hidden="false" role="img"
                                                                         viewBox="0 -2 5 10">
                                                                        <title>Rain</title>
                                                                        <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                                                    </svg>

                                                                </div>
                                                                <span data-testid="PercentageValue"
                                                                      class="DailyContent--value--3Xvjn"><?php echo $day['details'][1]['percent']; ?></span>
                                                            </div>
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <svg arialabel="Вітер"
                                                                     class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj"
                                                                     theme="action" set="current-conditions"
                                                                     name="wind"
                                                                     data-testid="Icon" aria-hidden="true"
                                                                     role="img"
                                                                     viewBox="0 0 24 24">
                                                                    <title>Wind</title>
                                                                    <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                                          stroke-width="2" stroke="currentColor"
                                                                          stroke-linecap="round"
                                                                          fill="none"></path>
                                                                </svg>
                                                                <span data-testid="Wind"
                                                                      class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn"><?php echo $day['details'][1]['windText']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p data-testid="wxPhrase"
                                                       class="DailyContent--narrative--3AcXd"><?php echo $day['details'][1]['description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row pg-x-15">
                                                <div col-5><span>Вологість <span>58%</span></span></div>
                                                <div col-5><span>УФ-індекс <span>0 з 10</span></span></div>
                                                <div col-5><span>Схід Місяця <span>7:27</span></span></div>
                                                <div col-5><span>Захід <span>23:13</span></span></div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-12">
                                            <div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg">
                                                <div data-testid="DailyContent"
                                                     class="DailyContent--DailyContent--rTQY_">
                                                    <h3 class="DailyContent--daypartName--3G5Y8">
                                                <span class="DailyContent--daypartDate--3MM0J">
                                                    <?php echo $day['details'][0]['timeDay']; ?>
                                                </span>
                                                        <?php echo $day['details'][0]['timeName']; ?>
                                                    </h3>
                                                    <div data-testid="ConditionsSummary"
                                                         class="DailyContent--ConditionSummary--2vnrT">
                                                        <div>
                                                    <span data-testid="TemperatureValue"
                                                          class="DailyContent--temp--_8DL5">
                                                        <?php echo $day['details'][0]['temp']; ?>
                                                    </span>
                                                        </div>
                                                        <div data-testid="weatherIcon"
                                                             class="DailyContent--Condition--3fAIb">
                                                            <svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5"
                                                                 set="weather" skycode="33" theme="full" name=""
                                                                 data-testid="Icon"
                                                                 aria-label="Переважно безхмарно"
                                                                 aria-hidden="false" role="img"
                                                                 viewBox="0 0 200 200">
                                                                <title>Mostly Clear Night</title>
                                                                <use xlink:href="#svg-symbol-moon"
                                                                     transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                                                     mask="url(#mostly-clear-night-mask)"></use>
                                                                <use xlink:href="#svg-symbol-cloud"
                                                                     transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="DailyContent--dataPoints--3fymE">
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <div class="DailyContent--rainIconBlock--3JIMK">
                                                                    <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG"
                                                                         theme="action" set="heads-up"
                                                                         name="precip-rain-single"
                                                                         data-testid="Icon"
                                                                         aria-label="Імовірність дощу"
                                                                         aria-hidden="false" role="img"
                                                                         viewBox="0 -2 5 10">
                                                                        <title>Rain</title>
                                                                        <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                                                    </svg>

                                                                </div>
                                                                <span data-testid="PercentageValue"
                                                                      class="DailyContent--value--3Xvjn"><?php echo $day['details'][0]['percent']; ?></span>
                                                            </div>
                                                            <div class="DailyContent--label--3rOJ4">
                                                                <svg arialabel="Вітер"
                                                                     class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj"
                                                                     theme="action" set="current-conditions"
                                                                     name="wind"
                                                                     data-testid="Icon" aria-hidden="true"
                                                                     role="img"
                                                                     viewBox="0 0 24 24">
                                                                    <title>Wind</title>
                                                                    <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                                          stroke-width="2" stroke="currentColor"
                                                                          stroke-linecap="round"
                                                                          fill="none"></path>
                                                                </svg>
                                                                <span data-testid="Wind"
                                                                      class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn"><?php echo $day['details'][0]['windText']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p data-testid="wxPhrase"
                                                       class="DailyContent--narrative--3AcXd"><?php echo $day['details'][0]['description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row pg-x-15">
                                                <div col-5><span>Вологість <span>58%</span></span></div>
                                                <div col-5><span>УФ-індекс <span>0 з 10</span></span></div>
                                                <div col-5><span>Схід Сонця <span>7:27</span></span></div>
                                                <div col-5><span>Захід <span>23:13</span></span></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                        <div class="col">
                                            <div class="row pg-x-15  align-items-center">
                                                <div class="col-12">

                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <div class="row pg-x-15">
                                                        <div col-5><span>Вологість <span>58%</span></span></div>
                                                        <div col-5><span>УФ-індекс <span>0 з 10</span></span></div>
                                                        <div col-5><span>Схід Місяця <span>7:27</span></span></div>
                                                        <div col-5><span>Захід <span>23:13</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php //endforeach; ?>
                                </div>
                            </details>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <pre>
        <?php print_r($mainTag); ?>
    </pre>
</main>

<?php require_once(ROOT_PATH . "/templates/partials/footer.php"); ?>
<?php /*foreach ($mainTag['days'] as $day): */?><!--
    <div class="row">
        <div class="col-12">
            <details <?php /*echo $day['open'] ? "open" : ""; */?>>
                <summary class="Disclosure--Summary--AvowU">
                    <div class="Disclosure--SummaryDefault--1z_mF">
                        <div class="row">
                            <div class="col-2 pr-0">
                                <h2 class="h2-fs1"><?php /*echo $day['summary']['date']; */?></h2>
                            </div>
                            <div class="col-1 pr-0">
                                <span><strong><?php /*echo $day['summary']['temp1']; */?></strong></span>
                                <span data-testid="lowTempValue">/
                                                    <span data-testid="TemperatureValue"
                                                          class="DetailsSummary--lowTempValue--1DlJK">
                                                        <?php /*echo $day['summary']['temp2']; */?>
                                                    </span>
                                                </span>
                            </div>
                            <div class="col-5 pr-0">
                                <div data-testid="wxIcon" class="DetailsSummary--condition--mqdxh">
                                    <svg aria-hidden="true"
                                         class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DetailsSummary--wxIcon--1uj4L"
                                         set="weather" skycode="33" theme="full" name=""
                                         data-testid="Icon" role="img" viewBox="0 0 200 200">
                                        <title>Mostly Clear Night</title>
                                        <use xlink:href="#svg-symbol-moon"
                                             transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                             mask="url(#mostly-clear-night-mask)"></use>
                                        <use xlink:href="#svg-symbol-cloud"
                                             transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                    </svg>
                                    <span class="DetailsSummary--extendedData--aaFeV">
                                                        <?php /*echo $day['summary']['text']; */?>
                                                    </span>
                                </div>
                            </div>
                            <div class="col-1 pr-0">
                                <div data-testid="Precip" class="DetailsSummary--precip--2ARnx">
                                    <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--precipIcon--2eEZg"
                                         set="heads-up" name="precip-rain-single" theme="action"
                                         data-testid="Icon" aria-label="Імовірність дощу"
                                         aria-hidden="false" role="img" viewBox="0 -2 5 10">
                                        <title>Rain</title>
                                        <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                    </svg>
                                    <span data-testid="PercentageValue">
                                                        <?php /*echo $day['summary']['percent']; */?>
                                                    </span>
                                </div>
                            </div>
                            <div class="col-3 pr-0">
                                <div data-testid="wind"
                                     class="DetailsSummary--wind--Cv4BH DetailsSummary--extendedData--aaFeV">
                                    <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--conditionsIcon--26Lme"
                                         set="current-conditions" name="wind" theme="action"
                                         data-testid="Icon" aria-label="Вітер" aria-hidden="false"
                                         role="img" viewBox="0 0 24 24">
                                        <title>Wind</title>
                                        <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                              stroke-width="2" stroke="currentColor"
                                              stroke-linecap="round" fill="none"></path>
                                    </svg>
                                    <span data-testid="Wind"
                                          class="Wind--windWrapper--1Va1P undefined">
                                                        <?php /*echo $day['summary']['windText']; */?>
                                                    </span>
                                </div>
                            </div>
                        </div>
                        <svg set="ui" name="caret-down"
                             class="Icon--icon--2AbGu Disclosure--SummaryIcon--29HFk" theme=""
                             data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24">
                            <title>Arrow Down</title>
                            <path d="M12 16.086l7.293-7.293a1 1 0 1 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-8-8a1 1 0 1 1 1.414-1.414L12 16.086z"></path>
                        </svg>
                    </div>
                </summary>
                <div class="row">
                    <?php /*foreach ($day['details'] as $timeOfDay): */?>
                        <div class="col">
                            <div class="row pg-x-15  align-items-center">
                                <div class="col-12">
                                    <div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg">
                                        <div data-testid="DailyContent"
                                             class="DailyContent--DailyContent--rTQY_">
                                            <h3 class="DailyContent--daypartName--3G5Y8">
                                                    <span class="DailyContent--daypartDate--3MM0J">
                                                        <?php /*echo $timeOfDay['timeDay']; */?>
                                                    </span>
                                                <?php /*echo $timeOfDay['timeName']; */?>
                                            </h3>
                                            <div data-testid="ConditionsSummary"
                                                 class="DailyContent--ConditionSummary--2vnrT">
                                                <div>
                                                        <span data-testid="TemperatureValue"
                                                              class="DailyContent--temp--_8DL5">
                                                            <?php /*echo $timeOfDay['temp']; */?>
                                                        </span>
                                                </div>
                                                <div data-testid="weatherIcon"
                                                     class="DailyContent--Condition--3fAIb">
                                                    <svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5"
                                                         set="weather" skycode="33" theme="full" name=""
                                                         data-testid="Icon"
                                                         aria-label="Переважно безхмарно"
                                                         aria-hidden="false" role="img"
                                                         viewBox="0 0 200 200">
                                                        <title>Mostly Clear Night</title>
                                                        <use xlink:href="#svg-symbol-moon"
                                                             transform="matrix(2.05 0 0 2.05 -61.5 4.1)"
                                                             mask="url(#mostly-clear-night-mask)"></use>
                                                        <use xlink:href="#svg-symbol-cloud"
                                                             transform="matrix(.56 0 0 .56 52.08 42.56)"></use>
                                                    </svg>
                                                </div>
                                                <div class="DailyContent--dataPoints--3fymE">
                                                    <div class="DailyContent--label--3rOJ4">
                                                        <div class="DailyContent--rainIconBlock--3JIMK">
                                                            <svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG"
                                                                 theme="action" set="heads-up"
                                                                 name="precip-rain-single"
                                                                 data-testid="Icon"
                                                                 aria-label="Імовірність дощу"
                                                                 aria-hidden="false" role="img"
                                                                 viewBox="0 -2 5 10">
                                                                <title>Rain</title>
                                                                <path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path>
                                                            </svg>

                                                        </div>
                                                        <span data-testid="PercentageValue"
                                                              class="DailyContent--value--3Xvjn"><?php /*echo $timeOfDay['percent']; */?></span>
                                                    </div>
                                                    <div class="DailyContent--label--3rOJ4">
                                                        <svg arialabel="Вітер"
                                                             class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj"
                                                             theme="action" set="current-conditions"
                                                             name="wind"
                                                             data-testid="Icon" aria-hidden="true"
                                                             role="img"
                                                             viewBox="0 0 24 24">
                                                            <title>Wind</title>
                                                            <path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742"
                                                                  stroke-width="2" stroke="currentColor"
                                                                  stroke-linecap="round"
                                                                  fill="none"></path>
                                                        </svg>
                                                        <span data-testid="Wind"
                                                              class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn"><?php /*echo $timeOfDay['windText']; */?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p data-testid="wxPhrase"
                                               class="DailyContent--narrative--3AcXd"><?php /*echo $timeOfDay['description']; */?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 align-self-end">
                                    <div class="row pg-x-15">
                                        <div col-5><span>Вологість <span>58%</span></span></div>
                                        <div col-5><span>УФ-індекс <span>0 з 10</span></span></div>
                                        <div col-5><span>Схід Місяця <span>7:27</span></span></div>
                                        <div col-5><span>Захід <span>23:13</span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php /*endforeach; */?>
                </div>
            </details>
        </div>
    </div>

--><?php /*endforeach; */?>
