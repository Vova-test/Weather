<?php require_once(ROOT_PATH . "/templates/partials/header.php"); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-lg-9 col-xl-8 block-ten">
                <div class="padding-1">
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
                <?php foreach ($mainTag['days'] as $day): ?>
                    <div class="row">
                        <div class="col-12">
                            <details <?php echo $day['open'] ? "open" : ""; ?>>
                                <summary class="Disclosure--Summary--AvowU">
                                    <div class="Disclosure--SummaryDefault--1z_mF">
                                        <div class="col">
                                            <div class="row">
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
                                    <?php foreach ($day['details'] as $timeOfDay): ?>
                                        <div class="col">
                                            <div class="row pg-x-15  align-items-center">
                                                <div class="col-12">
                                                    <div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg">
                                                        <div data-testid="DailyContent"
                                                             class="DailyContent--DailyContent--rTQY_">
                                                            <h3 class="DailyContent--daypartName--3G5Y8">
                                                    <span class="DailyContent--daypartDate--3MM0J">
                                                        <?php echo $timeOfDay['timeDay']; ?>
                                                    </span>
                                                                <?php echo $timeOfDay['timeName']; ?>
                                                            </h3>
                                                            <div data-testid="ConditionsSummary"
                                                                 class="DailyContent--ConditionSummary--2vnrT">
                                                                <div>
                                                        <span data-testid="TemperatureValue"
                                                              class="DailyContent--temp--_8DL5">
                                                            <?php echo $timeOfDay['temp']; ?>
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
                                                                              class="DailyContent--value--3Xvjn"><?php echo $timeOfDay['percent']; ?></span>
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
                                                                              class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn"><?php echo $timeOfDay['windText']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p data-testid="wxPhrase"
                                                               class="DailyContent--narrative--3AcXd"><?php echo $timeOfDay['description']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <div class="row">
                                                        <div col-5>Вологість <span>58%</span></div>
                                                        <div col-5>УФ-індекс <span>0 з 10</span></div>
                                                        <div col-5>Схід Місяця <span>7:27</span></div>
                                                        <div col-5>Захід <span>23:13</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </details>
                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="row">
                    <div class="col12">
                        <details class="Disclosure--themeList--uBa5q" data-track-string="detailsExpand" event="true"><summary class="Disclosure--Summary--AvowU DaypartDetails--Summary--2nJx1 Disclosure--hideBorderOnSummaryOpen--LEvZQ" role="button" aria-expanded="false"><div class="DaypartDetails--DetailSummaryContent--1c28m Disclosure--SummaryDefault--1z_mF"><div id="detailIndex5" data-testid="DetailsSummary" class="DetailsSummary--DetailsSummary--QpFD- DetailsSummary--fadeOnOpen--1MLf5"><h2 data-testid="daypartName" class="DetailsSummary--daypartName--1Mebr">пн 12</h2><div data-testid="detailsTemperature" class="DetailsSummary--temperature--3FMlw"><span data-testid="TemperatureValue" class="DetailsSummary--highTempValue--3x6cL">12°</span><span data-testid="lowTempValue">/<span data-testid="TemperatureValue" class="DetailsSummary--lowTempValue--1DlJK">7°</span></span></div><div data-testid="wxIcon" class="DetailsSummary--condition--mqdxh"><svg aria-hidden="true" class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DetailsSummary--wxIcon--1uj4L" set="weather" skycode="11" theme="full" name="" data-testid="Icon" role="img" viewBox="0 0 200 200"><title>Scattered Showers</title><use xlink:href="#svg-symbol-cloud" transform="translate(0 -41)" stroke-width="5.7"></use><use xlink:href="#svg-symbol-drop" transform="translate(16)"></use><use xlink:href="#svg-symbol-drop" transform="matrix(1.7 0 0 2 -13 -121)"></use></svg><span class="DetailsSummary--extendedData--aaFeV">Зливові дощі</span></div><div data-testid="Precip" class="DetailsSummary--precip--2ARnx"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--precipIcon--2eEZg" set="heads-up" name="precip-rain-single" theme="action" data-testid="Icon" aria-label="Імовірність дощу" aria-hidden="false" role="img" viewBox="0 -2 5 10"><title>Rain</title><path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path></svg><span data-testid="PercentageValue">52%</span></div><div data-testid="wind" class="DetailsSummary--wind--Cv4BH DetailsSummary--extendedData--aaFeV"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsSummary--conditionsIcon--26Lme" set="current-conditions" name="wind" theme="action" data-testid="Icon" aria-label="Вітер" aria-hidden="false" role="img" viewBox="0 0 24 24"><title>Wind</title><path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742" stroke-width="2" stroke="currentColor" stroke-linecap="round" fill="none"></path></svg><span data-testid="Wind" class="Wind--windWrapper--1Va1P undefined">Пд-Пд-Сх 21 км/год</span></div></div><svg set="ui" name="caret-down" class="Icon--icon--2AbGu Disclosure--SummaryIcon--29HFk" theme="" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Arrow Down</title><path d="M12 16.086l7.293-7.293a1 1 0 1 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-8-8a1 1 0 1 1 1.414-1.414L12 16.086z"></path></svg></div></summary><div class="DaypartDetails--Content--XQooU DaypartDetails--contentGrid--3cYKg"><div data-testid="DailyContent" class="DailyContent--DailyContent--rTQY_"><h3 class="DailyContent--daypartName--3G5Y8"><span class="DailyContent--daypartDate--3MM0J">пн 12</span> | День</h3><div data-testid="ConditionsSummary" class="DailyContent--ConditionSummary--2vnrT"><div><span data-testid="TemperatureValue" class="DailyContent--temp--_8DL5">12°</span></div><div data-testid="weatherIcon" class="DailyContent--Condition--3fAIb"><svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5" set="weather" skycode="11" theme="full" name="" data-testid="Icon" aria-label="Зливові дощі" aria-hidden="false" role="img" viewBox="0 0 200 200"><title>Scattered Showers</title><use xlink:href="#svg-symbol-cloud" transform="translate(0 -41)" stroke-width="5.7"></use><use xlink:href="#svg-symbol-drop" transform="translate(16)"></use><use xlink:href="#svg-symbol-drop" transform="matrix(1.7 0 0 2 -13 -121)"></use></svg></div><div class="DailyContent--dataPoints--3fymE"><div class="DailyContent--label--3rOJ4"><div class="DailyContent--rainIconBlock--3JIMK"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG" theme="action" set="heads-up" name="precip-rain-single" data-testid="Icon" aria-label="Імовірність дощу" aria-hidden="false" role="img" viewBox="0 -2 5 10"><title>Rain</title><path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path></svg></div><span data-testid="PercentageValue" class="DailyContent--value--3Xvjn">52%</span></div><div class="DailyContent--label--3rOJ4"><svg arialabel="Вітер" class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj" theme="action" set="current-conditions" name="wind" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Wind</title><path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742" stroke-width="2" stroke="currentColor" stroke-linecap="round" fill="none"></path></svg><span data-testid="Wind" class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn">Пд-Пд-Сх <!-- -->21 км/год</span></div></div></div><p data-testid="wxPhrase" class="DailyContent--narrative--3AcXd">Зливові дощі. Максимум 11градуси Цельсія. Вітер Пд-Пд-Сх від 15 до 25 км/год. Ймовірність дощу 50%.</p></div><ul data-testid="DetailsTable" class="DetailsTable--DetailsTable--2qH8C DaypartDetails--DetailsTable--2fwt-"><li data-testid="HumiditySection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="humidity" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Humidity</title><path fill-rule="evenodd" d="M11.743 17.912a4.182 4.182 0 0 1-2.928-1.182 3.972 3.972 0 0 1-.614-4.962.743.743 0 0 1 .646-.349c.234 0 .476.095.66.275l4.467 4.355c.385.376.39.998-.076 1.275a4.216 4.216 0 0 1-2.155.588M11.855 4c.316 0 .61.14.828.395.171.2.36.416.562.647 1.857 2.126 4.965 5.684 4.965 8.73 0 3.416-2.85 6.195-6.353 6.195-3.505 0-6.357-2.78-6.357-6.195 0-3.082 2.921-6.406 4.854-8.605.242-.275.47-.535.673-.772A1.08 1.08 0 0 1 11.855 4"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="HumidityTitle" class="DetailsTable--label--2e7uR">Вологість</span><span data-testid="PercentageValue" class="DetailsTable--value--1F3Ze">75%</span></div></li><li data-testid="uvIndexSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="uv" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>UV Level</title><path d="M7.4 5.598a.784.784 0 0 1 .25-.92c.335-.256.824-.197 1.02.062.066.063.066.063.08.085l2.406 3.152-.626.238a3.983 3.983 0 0 0-1.097.633l-.522.424L7.4 5.598zm4.539 2.358c-.21 0-.418.017-.625.05l-.664.106.09-.666.438-3.266c.013-.072.013-.072.012-.057a.783.783 0 0 1 .666-.616.78.78 0 0 1 .872.639l.006.038.507 3.933-.662-.108a3.957 3.957 0 0 0-.64-.053zm-7.781 3.19l.026-.004 3.934-.507-.108.662a3.98 3.98 0 0 0-.003 1.266l.105.664-.665-.09-3.265-.439a.784.784 0 0 1-.676-.679c-.054-.42.238-.809.63-.869l.022-.004zm11.504-.617a3.98 3.98 0 0 0-.632-1.097l-.425-.522.623-.256 3.056-1.256a.787.787 0 0 1 .916.253c.256.337.199.817-.104 1.063l-.045.037-3.151 2.405-.238-.627zm-1.205-1.672a3.984 3.984 0 0 0-1.095-.637l-.626-.24.41-.532 2.008-2.602c.059-.07.059-.07.046-.052a.78.78 0 0 1 1.306.227c.076.185.079.39.02.54l-.021.06-1.528 3.662-.52-.426zM4.595 7.793c.162-.387.611-.58.971-.441.017.004.017.004.055.02L9.283 8.9l-.425.52a3.985 3.985 0 0 0-.636 1.094l-.24.627-3.144-2.425a.784.784 0 0 1-.243-.924zm14.443 7.367c.054.045.054.045.044.04a.784.784 0 0 1 .199.884c-.163.386-.61.58-.964.443-.024-.006-.024-.006-.062-.022l-3.662-1.529.426-.52a3.98 3.98 0 0 0 .636-1.094l.241-.626 3.142 2.424zm1.332-3.303c.053.422-.239.809-.63.87l-.035.006-3.945.508.108-.662a3.999 3.999 0 0 0 .003-1.266l-.105-.663.665.09 3.272.44c.068.012.068.012.052.01a.784.784 0 0 1 .615.667zm-3.894 6.421c.024.068.024.068.017.053a.786.786 0 0 1-.27.87c-.332.25-.816.194-1.047-.091-.022-.023-.022-.023-.05-.058l-2.406-3.154.626-.237a3.977 3.977 0 0 0 1.097-.632l.523-.425 1.51 3.674zm-8.26-4.932c.151.397.365.767.633 1.097l.424.522-.622.256-3.054 1.255a.787.787 0 0 1-.92-.25.781.781 0 0 1-.154-.58c.027-.199.127-.379.227-.452.045-.046.045-.046.075-.069l3.153-2.406.238.627zm3.723 2.572c.209 0 .417-.016.625-.049l.662-.103-.089.664-.438 3.26-.012.062a.785.785 0 0 1-.666.618c-.048.005-.048.005-.101.006-.386 0-.714-.28-.764-.612-.01-.043-.01-.043-.014-.072l-.507-3.934.662.108c.213.035.427.052.642.052zM7.366 18.27l.006-.015L8.9 14.592l.52.426a3.99 3.99 0 0 0 1.094.636l.626.241-.41.531-2.012 2.609-.04.046a.788.788 0 0 1-.886.2.787.787 0 0 1-.428-1.011z"></path><path d="M11.911 14.322a2.411 2.411 0 1 0 0-4.822 2.411 2.411 0 0 0 0 4.822zm0 2a4.411 4.411 0 1 1 0-8.822 4.411 4.411 0 0 1 0 8.822z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="uvIndexTitle" class="DetailsTable--label--2e7uR">УФ-індекс</span><span data-testid="UVIndexValue" class="DetailsTable--value--1F3Ze">5 з 10</span></div></li><li data-testid="SunriseSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="sunrise-sun" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Sun Rise</title><path d="M12.003 16.125v-2.21m-5.602 2.129l1.69 1.441m9.237-1.489l-1.4 1.63" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path><path d="M4.05 20.938h2.48m11.27 0h2.481" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 9.938V4.426M8.563 6.5L12 3.062M15.438 6.5L12 3.062" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path><path d="M12.02 21.605h3.059c.421 0 .543-.229.543-.455 0-1.735-1.613-3.142-3.602-3.142-1.99 0-3.603 1.407-3.603 3.142 0 .266.1.455.529.455h3.074z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="SunriseTitle" class="DetailsTable--label--2e7uR">Схід сонця</span><span data-testid="SunriseTime" class="DetailsTable--value--1F3Ze">6:39</span></div></li><li data-testid="SunsetSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="sunset-sun" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Sunset</title><path d="M12.003 15.781v-2.21M6.401 15.7l1.69 1.442m9.237-1.49l-1.4 1.63" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path><path d="M4.05 20.594h2.48m11.27 0h2.481" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 3.063v5.51M8.563 6.5L12 9.938M15.438 6.5L12 9.938" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path><path d="M12.02 21.261h3.059c.421 0 .543-.229.543-.455 0-1.735-1.613-3.142-3.602-3.142-1.99 0-3.603 1.407-3.603 3.142 0 .266.1.455.529.455h3.074z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="SunsetTitle" class="DetailsTable--label--2e7uR">Захід сонця</span><span data-testid="SunsetTime" class="DetailsTable--value--1F3Ze">19:57</span></div></li></ul><div data-testid="DailyContent" class="DailyContent--DailyContent--rTQY_"><h3 class="DailyContent--daypartName--3G5Y8"><span class="DailyContent--daypartDate--3MM0J">пн 12</span> | Ніч</h3><div data-testid="ConditionsSummary" class="DailyContent--ConditionSummary--2vnrT"><div><span data-testid="TemperatureValue" class="DailyContent--temp--_8DL5">7°</span></div><div data-testid="weatherIcon" class="DailyContent--Condition--3fAIb"><svg class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DailyContent--weatherIcon--2tnL5" set="weather" skycode="11" theme="full" name="" data-testid="Icon" aria-label="Зливові дощі" aria-hidden="false" role="img" viewBox="0 0 200 200"><title>Scattered Showers</title><use xlink:href="#svg-symbol-cloud" transform="translate(0 -41)" stroke-width="5.7"></use><use xlink:href="#svg-symbol-drop" transform="translate(16)"></use><use xlink:href="#svg-symbol-drop" transform="matrix(1.7 0 0 2 -13 -121)"></use></svg></div><div class="DailyContent--dataPoints--3fymE"><div class="DailyContent--label--3rOJ4"><div class="DailyContent--rainIconBlock--3JIMK"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--rainIcon--1LDuG" theme="action" set="heads-up" name="precip-rain-single" data-testid="Icon" aria-label="Імовірність дощу" aria-hidden="false" role="img" viewBox="0 -2 5 10"><title>Rain</title><path d="M4.7329.0217c-.1848-.059-.3855.0064-.4803.148L.2731 5.1191c-.0814.0922-.1501.1961-.196.3108-.2469.6009.1185 1.2697.8156 1.4943.6914.226 1.447-.0712 1.7-.6585L4.9662.4987l.0111-.0282c.073-.1807-.036-.379-.2444-.4488z"></path></svg></div><span data-testid="PercentageValue" class="DailyContent--value--3Xvjn">43%</span></div><div class="DailyContent--label--3rOJ4"><svg arialabel="Вітер" class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DailyContent--windIcon--35FOj" theme="action" set="current-conditions" name="wind" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Wind</title><path d="M6 8.67h5.354c1.457 0 2.234-1.158 2.234-2.222S12.687 4.4 11.354 4.4c-.564 0-1.023.208-1.366.488M3 11.67h15.54c1.457 0 2.235-1.158 2.235-2.222S19.873 7.4 18.54 7.4c-.747 0-1.311.365-1.663.78M6 15.4h9.389c1.457 0 2.234 1.159 2.234 2.223 0 1.064-.901 2.048-2.234 2.048a2.153 2.153 0 0 1-1.63-.742" stroke-width="2" stroke="currentColor" stroke-linecap="round" fill="none"></path></svg><span data-testid="Wind" class="Wind--windWrapper--1Va1P DailyContent--value--3Xvjn">Сх <!-- -->16 км/год</span></div></div></div><p data-testid="wxPhrase" class="DailyContent--narrative--3AcXd">Зливові дощі. Мінімум 7градуси Цельсія. Вітер Сх від 10 до 15 км/год. Ймовірність дощу 40%.</p></div><ul data-testid="DetailsTable" class="DetailsTable--DetailsTable--2qH8C DaypartDetails--DetailsTable--2fwt-"><li data-testid="HumiditySection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="humidity" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Humidity</title><path fill-rule="evenodd" d="M11.743 17.912a4.182 4.182 0 0 1-2.928-1.182 3.972 3.972 0 0 1-.614-4.962.743.743 0 0 1 .646-.349c.234 0 .476.095.66.275l4.467 4.355c.385.376.39.998-.076 1.275a4.216 4.216 0 0 1-2.155.588M11.855 4c.316 0 .61.14.828.395.171.2.36.416.562.647 1.857 2.126 4.965 5.684 4.965 8.73 0 3.416-2.85 6.195-6.353 6.195-3.505 0-6.357-2.78-6.357-6.195 0-3.082 2.921-6.406 4.854-8.605.242-.275.47-.535.673-.772A1.08 1.08 0 0 1 11.855 4"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="HumidityTitle" class="DetailsTable--label--2e7uR">Вологість</span><span data-testid="PercentageValue" class="DetailsTable--value--1F3Ze">78%</span></div></li><li data-testid="uvIndexSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="uv" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>UV Level</title><path d="M7.4 5.598a.784.784 0 0 1 .25-.92c.335-.256.824-.197 1.02.062.066.063.066.063.08.085l2.406 3.152-.626.238a3.983 3.983 0 0 0-1.097.633l-.522.424L7.4 5.598zm4.539 2.358c-.21 0-.418.017-.625.05l-.664.106.09-.666.438-3.266c.013-.072.013-.072.012-.057a.783.783 0 0 1 .666-.616.78.78 0 0 1 .872.639l.006.038.507 3.933-.662-.108a3.957 3.957 0 0 0-.64-.053zm-7.781 3.19l.026-.004 3.934-.507-.108.662a3.98 3.98 0 0 0-.003 1.266l.105.664-.665-.09-3.265-.439a.784.784 0 0 1-.676-.679c-.054-.42.238-.809.63-.869l.022-.004zm11.504-.617a3.98 3.98 0 0 0-.632-1.097l-.425-.522.623-.256 3.056-1.256a.787.787 0 0 1 .916.253c.256.337.199.817-.104 1.063l-.045.037-3.151 2.405-.238-.627zm-1.205-1.672a3.984 3.984 0 0 0-1.095-.637l-.626-.24.41-.532 2.008-2.602c.059-.07.059-.07.046-.052a.78.78 0 0 1 1.306.227c.076.185.079.39.02.54l-.021.06-1.528 3.662-.52-.426zM4.595 7.793c.162-.387.611-.58.971-.441.017.004.017.004.055.02L9.283 8.9l-.425.52a3.985 3.985 0 0 0-.636 1.094l-.24.627-3.144-2.425a.784.784 0 0 1-.243-.924zm14.443 7.367c.054.045.054.045.044.04a.784.784 0 0 1 .199.884c-.163.386-.61.58-.964.443-.024-.006-.024-.006-.062-.022l-3.662-1.529.426-.52a3.98 3.98 0 0 0 .636-1.094l.241-.626 3.142 2.424zm1.332-3.303c.053.422-.239.809-.63.87l-.035.006-3.945.508.108-.662a3.999 3.999 0 0 0 .003-1.266l-.105-.663.665.09 3.272.44c.068.012.068.012.052.01a.784.784 0 0 1 .615.667zm-3.894 6.421c.024.068.024.068.017.053a.786.786 0 0 1-.27.87c-.332.25-.816.194-1.047-.091-.022-.023-.022-.023-.05-.058l-2.406-3.154.626-.237a3.977 3.977 0 0 0 1.097-.632l.523-.425 1.51 3.674zm-8.26-4.932c.151.397.365.767.633 1.097l.424.522-.622.256-3.054 1.255a.787.787 0 0 1-.92-.25.781.781 0 0 1-.154-.58c.027-.199.127-.379.227-.452.045-.046.045-.046.075-.069l3.153-2.406.238.627zm3.723 2.572c.209 0 .417-.016.625-.049l.662-.103-.089.664-.438 3.26-.012.062a.785.785 0 0 1-.666.618c-.048.005-.048.005-.101.006-.386 0-.714-.28-.764-.612-.01-.043-.01-.043-.014-.072l-.507-3.934.662.108c.213.035.427.052.642.052zM7.366 18.27l.006-.015L8.9 14.592l.52.426a3.99 3.99 0 0 0 1.094.636l.626.241-.41.531-2.012 2.609-.04.046a.788.788 0 0 1-.886.2.787.787 0 0 1-.428-1.011z"></path><path d="M11.911 14.322a2.411 2.411 0 1 0 0-4.822 2.411 2.411 0 0 0 0 4.822zm0 2a4.411 4.411 0 1 1 0-8.822 4.411 4.411 0 0 1 0 8.822z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="uvIndexTitle" class="DetailsTable--label--2e7uR">УФ-індекс</span><span data-testid="UVIndexValue" class="DetailsTable--value--1F3Ze">0 з 10</span></div></li><li data-testid="MoonriseSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="moonrise" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Moon Rise</title><path d="M12 17.186c3.59 0 6.5 2.542 6.5 5.678 0 .409-.22.822-.98.822H6.454c-.773 0-.955-.342-.955-.822 0-3.136 2.91-5.678 6.5-5.678zM12.062.202c.291.014.578.133.8.355l4.19 4.19a1.219 1.219 0 11-1.724 1.723l-2.11-2.11v5.438a1.219 1.219 0 01-2.43.124l-.007-.124V4.36L8.672 6.47a1.219 1.219 0 01-1.624.089l-.1-.089a1.219 1.219 0 01-.088-1.625l.089-.099 4.19-4.189c.221-.222.508-.34.799-.355h.124z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="MoonriseTitle" class="DetailsTable--label--2e7uR">Схід Місяця</span><span data-testid="MoonriseTime" class="DetailsTable--value--1F3Ze">7:12</span><div class="DetailsTable--moonPhraseWrapper--f2P1N"><svg set="astro" class="Icon--icon--2AbGu Icon--fullTheme--3jU2v DetailsTable--moonIcon--10_wN" name="phase-0" theme="full" data-testid="Icon" aria-hidden="true" role="img" width="996" height="1024" viewBox="0 0 996 1024"><title>Moon Phase - Day 0</title><path d="M501.389 1009.31q-202.671 0-346.869-143.914T10.323 518.245q0-202.671 144.197-346.869T501.389 27.179q202.103 0 346.584 144.197t144.481 346.869q0 203.238-144.481 347.151T501.389 1009.31z"></path></svg><span data-testid="moonPhase" class="DetailsTable--moonPhrase--3tgxj">Новий місяць</span></div></div></li><li data-testid="MoonsetSection" class="DetailsTable--listItem--1MW7X"><svg class="Icon--icon--2AbGu Icon--actionTheme--2vSlg DetailsTable--icon--34dUa" theme="action" set="current-conditions" name="moonset" data-testid="Icon" aria-hidden="true" role="img" viewBox="0 0 24 24"><title>Moon Set</title><path d="M12 17.186c3.59 0 6.5 2.542 6.5 5.678 0 .409-.22.822-.98.822H6.454c-.773 0-.955-.342-.955-.822 0-3.136 2.91-5.678 6.5-5.678zM12 .2c.631 0 1.15.48 1.212 1.094l.007.125-.001 5.436 2.11-2.109a1.219 1.219 0 011.624-.088l.1.088c.443.445.473 1.146.088 1.625l-.089.099-4.19 4.19c-.19.19-.427.304-.674.342l-.125.013h-.124a1.214 1.214 0 01-.8-.356L6.948 6.47a1.219 1.219 0 111.724-1.724l2.109 2.109V1.419C10.781.746 11.327.2 12 .2z"></path></svg><div class="DetailsTable--field--2T9Jw"><span data-testid="MoonsetTitle" class="DetailsTable--label--2e7uR">Захід Місяця</span><span data-testid="MoonsetTime" class="DetailsTable--value--1F3Ze">20:37</span></div></li></ul></div></details>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>
        <?php print_r($mainTag); ?>
    </pre>
</main>

<?php require_once(ROOT_PATH . "/templates/partials/footer.php"); ?>