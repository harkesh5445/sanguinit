<div class="mb-2 flex phone-input-container">
    <div class="country-selector">
        <div class="selected-country" onclick="toggleCountryDropdown()">
            <img src="https://flagcdn.com/24x18/in.png" alt="India" class="flag-icon"> <!-- Default selected: India -->
            <span class="country-code">+91</span> <!-- Default selected: India -->
            <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="country-dropdown" id="countryDropdown">
            <div class="country-search-container">
                <input type="text" class="country-search" placeholder="Search countries..." id="countrySearch">
            </div>
            <div class="country-list" id="countryList">
                <div class="country-option" data-code="+93" data-country="af" data-name="Afghanistan">
                    <img src="https://flagcdn.com/24x18/af.png" alt="Afghanistan" class="flag-icon">
                    <span class="country-name">Afghanistan</span>
                    <span class="country-code">+93</span>
                </div>
                <div class="country-option" data-code="+355" data-country="al" data-name="Albania">
                    <img src="https://flagcdn.com/24x18/al.png" alt="Albania" class="flag-icon">
                    <span class="country-name">Albania</span>
                    <span class="country-code">+355</span>
                </div>
                <div class="country-option" data-code="+213" data-country="dz" data-name="Algeria">
                    <img src="https://flagcdn.com/24x18/dz.png" alt="Algeria" class="flag-icon">
                    <span class="country-name">Algeria</span>
                    <span class="country-code">+213</span>
                </div>
                <div class="country-option" data-code="+1" data-country="as" data-name="American Samoa">
                    <img src="https://flagcdn.com/24x18/as.png" alt="American Samoa" class="flag-icon">
                    <span class="country-name">American Samoa</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+376" data-country="ad" data-name="Andorra">
                    <img src="https://flagcdn.com/24x18/ad.png" alt="Andorra" class="flag-icon">
                    <span class="country-name">Andorra</span>
                    <span class="country-code">+376</span>
                </div>
                <div class="country-option" data-code="+244" data-country="ao" data-name="Angola">
                    <img src="https://flagcdn.com/24x18/ao.png" alt="Angola" class="flag-icon">
                    <span class="country-name">Angola</span>
                    <span class="country-code">+244</span>
                </div>
                <div class="country-option" data-code="+1" data-country="ai" data-name="Anguilla">
                    <img src="https://flagcdn.com/24x18/ai.png" alt="Anguilla" class="flag-icon">
                    <span class="country-name">Anguilla</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+672" data-country="aq" data-name="Antarctica">
                    <img src="https://flagcdn.com/24x18/aq.png" alt="Antarctica" class="flag-icon">
                    <span class="country-name">Antarctica</span>
                    <span class="country-code">+672</span>
                </div>
                <div class="country-option" data-code="+1" data-country="ag" data-name="Antigua and Barbuda">
                    <img src="https://flagcdn.com/24x18/ag.png" alt="Antigua and Barbuda" class="flag-icon">
                    <span class="country-name">Antigua and Barbuda</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+54" data-country="ar" data-name="Argentina">
                    <img src="https://flagcdn.com/24x18/ar.png" alt="Argentina" class="flag-icon">
                    <span class="country-name">Argentina</span>
                    <span class="country-code">+54</span>
                </div>
                <div class="country-option" data-code="+374" data-country="am" data-name="Armenia">
                    <img src="https://flagcdn.com/24x18/am.png" alt="Armenia" class="flag-icon">
                    <span class="country-name">Armenia</span>
                    <span class="country-code">+374</span>
                </div>
                <div class="country-option" data-code="+297" data-country="aw" data-name="Aruba">
                    <img src="https://flagcdn.com/24x18/aw.png" alt="Aruba" class="flag-icon">
                    <span class="country-name">Aruba</span>
                    <span class="country-code">+297</span>
                </div>
                <div class="country-option" data-code="+61" data-country="au" data-name="Australia">
                    <img src="https://flagcdn.com/24x18/au.png" alt="Australia" class="flag-icon">
                    <span class="country-name">Australia</span>
                    <span class="country-code">+61</span>
                </div>
                <div class="country-option" data-code="+43" data-country="at" data-name="Austria">
                    <img src="https://flagcdn.com/24x18/at.png" alt="Austria" class="flag-icon">
                    <span class="country-name">Austria</span>
                    <span class="country-code">+43</span>
                </div>
                <div class="country-option" data-code="+994" data-country="az" data-name="Azerbaijan">
                    <img src="https://flagcdn.com/24x18/az.png" alt="Azerbaijan" class="flag-icon">
                    <span class="country-name">Azerbaijan</span>
                    <span class="country-code">+994</span>
                </div>
                <div class="country-option" data-code="+1" data-country="bs" data-name="Bahamas">
                    <img src="https://flagcdn.com/24x18/bs.png" alt="Bahamas" class="flag-icon">
                    <span class="country-name">Bahamas</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+973" data-country="bh" data-name="Bahrain">
                    <img src="https://flagcdn.com/24x18/bh.png" alt="Bahrain" class="flag-icon">
                    <span class="country-name">Bahrain</span>
                    <span class="country-code">+973</span>
                </div>
                <div class="country-option" data-code="+880" data-country="bd" data-name="Bangladesh">
                    <img src="https://flagcdn.com/24x18/bd.png" alt="Bangladesh" class="flag-icon">
                    <span class="country-name">Bangladesh</span>
                    <span class="country-code">+880</span>
                </div>
                <div class="country-option" data-code="+1" data-country="bb" data-name="Barbados">
                    <img src="https://flagcdn.com/24x18/bb.png" alt="Barbados" class="flag-icon">
                    <span class="country-name">Barbados</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+375" data-country="by" data-name="Belarus">
                    <img src="https://flagcdn.com/24x18/by.png" alt="Belarus" class="flag-icon">
                    <span class="country-name">Belarus</span>
                    <span class="country-code">+375</span>
                </div>
                <div class="country-option" data-code="+32" data-country="be" data-name="Belgium">
                    <img src="https://flagcdn.com/24x18/be.png" alt="Belgium" class="flag-icon">
                    <span class="country-name">Belgium</span>
                    <span class="country-code">+32</span>
                </div>
                <div class="country-option" data-code="+501" data-country="bz" data-name="Belize">
                    <img src="https://flagcdn.com/24x18/bz.png" alt="Belize" class="flag-icon">
                    <span class="country-name">Belize</span>
                    <span class="country-code">+501</span>
                </div>
                <div class="country-option" data-code="+229" data-country="bj" data-name="Benin">
                    <img src="https://flagcdn.com/24x18/bj.png" alt="Benin" class="flag-icon">
                    <span class="country-name">Benin</span>
                    <span class="country-code">+229</span>
                </div>
                <div class="country-option" data-code="+1" data-country="bm" data-name="Bermuda">
                    <img src="https://flagcdn.com/24x18/bm.png" alt="Bermuda" class="flag-icon">
                    <span class="country-name">Bermuda</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+975" data-country="bt" data-name="Bhutan">
                    <img src="https://flagcdn.com/24x18/bt.png" alt="Bhutan" class="flag-icon">
                    <span class="country-name">Bhutan</span>
                    <span class="country-code">+975</span>
                </div>
                <div class="country-option" data-code="+591" data-country="bo" data-name="Bolivia">
                    <img src="https://flagcdn.com/24x18/bo.png" alt="Bolivia" class="flag-icon">
                    <span class="country-name">Bolivia</span>
                    <span class="country-code">+591</span>
                </div>
                <div class="country-option" data-code="+387" data-country="ba" data-name="Bosnia and Herzegovina">
                    <img src="https://flagcdn.com/24x18/ba.png" alt="Bosnia and Herzegovina" class="flag-icon">
                    <span class="country-name">Bosnia and Herzegovina</span>
                    <span class="country-code">+387</span>
                </div>
                <div class="country-option" data-code="+267" data-country="bw" data-name="Botswana">
                    <img src="https://flagcdn.com/24x18/bw.png" alt="Botswana" class="flag-icon">
                    <span class="country-name">Botswana</span>
                    <span class="country-code">+267</span>
                </div>
                <div class="country-option" data-code="+55" data-country="br" data-name="Brazil">
                    <img src="https://flagcdn.com/24x18/br.png" alt="Brazil" class="flag-icon">
                    <span class="country-name">Brazil</span>
                    <span class="country-code">+55</span>
                </div>
                <div class="country-option" data-code="+246" data-country="io" data-name="British Indian Ocean Territory">
                    <img src="https://flagcdn.com/24x18/io.png" alt="British Indian Ocean Territory" class="flag-icon">
                    <span class="country-name">British Indian Ocean Territory</span>
                    <span class="country-code">+246</span>
                </div>
                <div class="country-option" data-code="+1" data-country="vg" data-name="British Virgin Islands">
                    <img src="https://flagcdn.com/24x18/vg.png" alt="British Virgin Islands" class="flag-icon">
                    <span class="country-name">British Virgin Islands</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+673" data-country="bn" data-name="Brunei">
                    <img src="https://flagcdn.com/24x18/bn.png" alt="Brunei" class="flag-icon">
                    <span class="country-name">Brunei</span>
                    <span class="country-code">+673</span>
                </div>
                <div class="country-option" data-code="+359" data-country="bg" data-name="Bulgaria">
                    <img src="https://flagcdn.com/24x18/bg.png" alt="Bulgaria" class="flag-icon">
                    <span class="country-name">Bulgaria</span>
                    <span class="country-code">+359</span>
                </div>
                <div class="country-option" data-code="+226" data-country="bf" data-name="Burkina Faso">
                    <img src="https://flagcdn.com/24x18/bf.png" alt="Burkina Faso" class="flag-icon">
                    <span class="country-name">Burkina Faso</span>
                    <span class="country-code">+226</span>
                </div>
                <div class="country-option" data-code="+257" data-country="bi" data-name="Burundi">
                    <img src="https://flagcdn.com/24x18/bi.png" alt="Burundi" class="flag-icon">
                    <span class="country-name">Burundi</span>
                    <span class="country-code">+257</span>
                </div>
                <div class="country-option" data-code="+855" data-country="kh" data-name="Cambodia">
                    <img src="https://flagcdn.com/24x18/kh.png" alt="Cambodia" class="flag-icon">
                    <span class="country-name">Cambodia</span>
                    <span class="country-code">+855</span>
                </div>
                <div class="country-option" data-code="+237" data-country="cm" data-name="Cameroon">
                    <img src="https://flagcdn.com/24x18/cm.png" alt="Cameroon" class="flag-icon">
                    <span class="country-name">Cameroon</span>
                    <span class="country-code">+237</span>
                </div>
                <div class="country-option" data-code="+1" data-country="ca" data-name="Canada">
                    <img src="https://flagcdn.com/24x18/ca.png" alt="Canada" class="flag-icon">
                    <span class="country-name">Canada</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+238" data-country="cv" data-name="Cape Verde">
                    <img src="https://flagcdn.com/24x18/cv.png" alt="Cape Verde" class="flag-icon">
                    <span class="country-name">Cape Verde</span>
                    <span class="country-code">+238</span>
                </div>
                <div class="country-option" data-code="+1" data-country="ky" data-name="Cayman Islands">
                    <img src="https://flagcdn.com/24x18/ky.png" alt="Cayman Islands" class="flag-icon">
                    <span class="country-name">Cayman Islands</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+236" data-country="cf" data-name="Central African Republic">
                    <img src="https://flagcdn.com/24x18/cf.png" alt="Central African Republic" class="flag-icon">
                    <span class="country-name">Central African Republic</span>
                    <span class="country-code">+236</span>
                </div>
                <div class="country-option" data-code="+235" data-country="td" data-name="Chad">
                    <img src="https://flagcdn.com/24x18/td.png" alt="Chad" class="flag-icon">
                    <span class="country-name">Chad</span>
                    <span class="country-code">+235</span>
                </div>
                <div class="country-option" data-code="+56" data-country="cl" data-name="Chile">
                    <img src="https://flagcdn.com/24x18/cl.png" alt="Chile" class="flag-icon">
                    <span class="country-name">Chile</span>
                    <span class="country-code">+56</span>
                </div>
                <div class="country-option" data-code="+86" data-country="cn" data-name="China">
                    <img src="https://flagcdn.com/24x18/cn.png" alt="China" class="flag-icon">
                    <span class="country-name">China</span>
                    <span class="country-code">+86</span>
                </div>
                <div class="country-option" data-code="+61" data-country="cx" data-name="Christmas Island">
                    <img src="https://flagcdn.com/24x18/cx.png" alt="Christmas Island" class="flag-icon">
                    <span class="country-name">Christmas Island</span>
                    <span class="country-code">+61</span>
                </div>
                <div class="country-option" data-code="+61" data-country="cc" data-name="Cocos Islands">
                    <img src="https://flagcdn.com/24x18/cc.png" alt="Cocos Islands" class="flag-icon">
                    <span class="country-name">Cocos Islands</span>
                    <span class="country-code">+61</span>
                </div>
                <div class="country-option" data-code="+57" data-country="co" data-name="Colombia">
                    <img src="https://flagcdn.com/24x18/co.png" alt="Colombia" class="flag-icon">
                    <span class="country-name">Colombia</span>
                    <span class="country-code">+57</span>
                </div>
                <div class="country-option" data-code="+269" data-country="km" data-name="Comoros">
                    <img src="https://flagcdn.com/24x18/km.png" alt="Comoros" class="flag-icon">
                    <span class="country-name">Comoros</span>
                    <span class="country-code">+269</span>
                </div>
                <div class="country-option" data-code="+682" data-country="ck" data-name="Cook Islands">
                    <img src="https://flagcdn.com/24x18/ck.png" alt="Cook Islands" class="flag-icon">
                    <span class="country-name">Cook Islands</span>
                    <span class="country-code">+682</span>
                </div>
                <div class="country-option" data-code="+506" data-country="cr" data-name="Costa Rica">
                    <img src="https://flagcdn.com/24x18/cr.png" alt="Costa Rica" class="flag-icon">
                    <span class="country-name">Costa Rica</span>
                    <span class="country-code">+506</span>
                </div>
                <div class="country-option" data-code="+385" data-country="hr" data-name="Croatia">
                    <img src="https://flagcdn.com/24x18/hr.png" alt="Croatia" class="flag-icon">
                    <span class="country-name">Croatia</span>
                    <span class="country-code">+385</span>
                </div>
                <div class="country-option" data-code="+53" data-country="cu" data-name="Cuba">
                    <img src="https://flagcdn.com/24x18/cu.png" alt="Cuba" class="flag-icon">
                    <span class="country-name">Cuba</span>
                    <span class="country-code">+53</span>
                </div>
                <div class="country-option" data-code="+599" data-country="cw" data-name="Curacao">
                    <img src="https://flagcdn.com/24x18/cw.png" alt="Curacao" class="flag-icon">
                    <span class="country-name">Curacao</span>
                    <span class="country-code">+599</span>
                </div>
                <div class="country-option" data-code="+357" data-country="cy" data-name="Cyprus">
                    <img src="https://flagcdn.com/24x18/cy.png" alt="Cyprus" class="flag-icon">
                    <span class="country-name">Cyprus</span>
                    <span class="country-code">+357</span>
                </div>
                <div class="country-option" data-code="+420" data-country="cz" data-name="Czech Republic">
                    <img src="https://flagcdn.com/24x18/cz.png" alt="Czech Republic" class="flag-icon">
                    <span class="country-name">Czech Republic</span>
                    <span class="country-code">+420</span>
                </div>
                <div class="country-option" data-code="+243" data-country="cd" data-name="Democratic Republic of the Congo">
                    <img src="https://flagcdn.com/24x18/cd.png" alt="Democratic Republic of the Congo" class="flag-icon">
                    <span class="country-name">Democratic Republic of the Congo</span>
                    <span class="country-code">+243</span>
                </div>
                <div class="country-option" data-code="+45" data-country="dk" data-name="Denmark">
                    <img src="https://flagcdn.com/24x18/dk.png" alt="Denmark" class="flag-icon">
                    <span class="country-name">Denmark</span>
                    <span class="country-code">+45</span>
                </div>
                <div class="country-option" data-code="+253" data-country="dj" data-name="Djibouti">
                    <img src="https://flagcdn.com/24x18/dj.png" alt="Djibouti" class="flag-icon">
                    <span class="country-name">Djibouti</span>
                    <span class="country-code">+253</span>
                </div>
                <div class="country-option" data-code="+1" data-country="dm" data-name="Dominica">
                    <img src="https://flagcdn.com/24x18/dm.png" alt="Dominica" class="flag-icon">
                    <span class="country-name">Dominica</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+1" data-country="do" data-name="Dominican Republic">
                    <img src="https://flagcdn.com/24x18/do.png" alt="Dominican Republic" class="flag-icon">
                    <span class="country-name">Dominican Republic</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+670" data-country="tl" data-name="East Timor">
                    <img src="https://flagcdn.com/24x18/tl.png" alt="East Timor" class="flag-icon">
                    <span class="country-name">East Timor</span>
                    <span class="country-code">+670</span>
                </div>
                <div class="country-option" data-code="+593" data-country="ec" data-name="Ecuador">
                    <img src="https://flagcdn.com/24x18/ec.png" alt="Ecuador" class="flag-icon">
                    <span class="country-name">Ecuador</span>
                    <span class="country-code">+593</span>
                </div>
                <div class="country-option" data-code="+20" data-country="eg" data-name="Egypt">
                    <img src="https://flagcdn.com/24x18/eg.png" alt="Egypt" class="flag-icon">
                    <span class="country-name">Egypt</span>
                    <span class="country-code">+20</span>
                </div>
                <div class="country-option" data-code="+503" data-country="sv" data-name="El Salvador">
                    <img src="https://flagcdn.com/24x18/sv.png" alt="El Salvador" class="flag-icon">
                    <span class="country-name">El Salvador</span>
                    <span class="country-code">+503</span>
                </div>
                <div class="country-option" data-code="+240" data-country="gq" data-name="Equatorial Guinea">
                    <img src="https://flagcdn.com/24x18/gq.png" alt="Equatorial Guinea" class="flag-icon">
                    <span class="country-name">Equatorial Guinea</span>
                    <span class="country-code">+240</span>
                </div>
                <div class="country-option" data-code="+291" data-country="er" data-name="Eritrea">
                    <img src="https://flagcdn.com/24x18/er.png" alt="Eritrea" class="flag-icon">
                    <span class="country-name">Eritrea</span>
                    <span class="country-code">+291</span>
                </div>
                <div class="country-option" data-code="+372" data-country="ee" data-name="Estonia">
                    <img src="https://flagcdn.com/24x18/ee.png" alt="Estonia" class="flag-icon">
                    <span class="country-name">Estonia</span>
                    <span class="country-code">+372</span>
                </div>
                <div class="country-option" data-code="+268" data-country="sz" data-name="Eswatini">
                    <img src="https://flagcdn.com/24x18/sz.png" alt="Eswatini" class="flag-icon">
                    <span class="country-name">Eswatini</span>
                    <span class="country-code">+268</span>
                </div>
                <div class="country-option" data-code="+251" data-country="et" data-name="Ethiopia">
                    <img src="https://flagcdn.com/24x18/et.png" alt="Ethiopia" class="flag-icon">
                    <span class="country-name">Ethiopia</span>
                    <span class="country-code">+251</span>
                </div>
                <div class="country-option" data-code="+500" data-country="fk" data-name="Falkland Islands">
                    <img src="https://flagcdn.com/24x18/fk.png" alt="Falkland Islands" class="flag-icon">
                    <span class="country-name">Falkland Islands</span>
                    <span class="country-code">+500</span>
                </div>
                <div class="country-option" data-code="+298" data-country="fo" data-name="Faroe Islands">
                    <img src="https://flagcdn.com/24x18/fo.png" alt="Faroe Islands" class="flag-icon">
                    <span class="country-name">Faroe Islands</span>
                    <span class="country-code">+298</span>
                </div>
                <div class="country-option" data-code="+679" data-country="fj" data-name="Fiji">
                    <img src="https://flagcdn.com/24x18/fj.png" alt="Fiji" class="flag-icon">
                    <span class="country-name">Fiji</span>
                    <span class="country-code">+679</span>
                </div>
                <div class="country-option" data-code="+358" data-country="fi" data-name="Finland">
                    <img src="https://flagcdn.com/24x18/fi.png" alt="Finland" class="flag-icon">
                    <span class="country-name">Finland</span>
                    <span class="country-code">+358</span>
                </div>
                <div class="country-option" data-code="+33" data-country="fr" data-name="France">
                    <img src="https://flagcdn.com/24x18/fr.png" alt="France" class="flag-icon">
                    <span class="country-name">France</span>
                    <span class="country-code">+33</span>
                </div>
                <div class="country-option" data-code="+594" data-country="gf" data-name="French Guiana">
                    <img src="https://flagcdn.com/24x18/gf.png" alt="French Guiana" class="flag-icon">
                    <span class="country-name">French Guiana</span>
                    <span class="country-code">+594</span>
                </div>
                <div class="country-option" data-code="+689" data-country="pf" data-name="French Polynesia">
                    <img src="https://flagcdn.com/24x18/pf.png" alt="French Polynesia" class="flag-icon">
                    <span class="country-name">French Polynesia</span>
                    <span class="country-code">+689</span>
                </div>
                <div class="country-option" data-code="+241" data-country="ga" data-name="Gabon">
                    <img src="https://flagcdn.com/24x18/ga.png" alt="Gabon" class="flag-icon">
                    <span class="country-name">Gabon</span>
                    <span class="country-code">+241</span>
                </div>
                <div class="country-option" data-code="+220" data-country="gm" data-name="Gambia">
                    <img src="https://flagcdn.com/24x18/gm.png" alt="Gambia" class="flag-icon">
                    <span class="country-name">Gambia</span>
                    <span class="country-code">+220</span>
                </div>
                <div class="country-option" data-code="+995" data-country="ge" data-name="Georgia">
                    <img src="https://flagcdn.com/24x18/ge.png" alt="Georgia" class="flag-icon">
                    <span class="country-name">Georgia</span>
                    <span class="country-code">+995</span>
                </div>
                <div class="country-option" data-code="+49" data-country="de" data-name="Germany">
                    <img src="https://flagcdn.com/24x18/de.png" alt="Germany" class="flag-icon">
                    <span class="country-name">Germany</span>
                    <span class="country-code">+49</span>
                </div>
                <div class="country-option" data-code="+233" data-country="gh" data-name="Ghana">
                    <img src="https://flagcdn.com/24x18/gh.png" alt="Ghana" class="flag-icon">
                    <span class="country-name">Ghana</span>
                    <span class="country-code">+233</span>
                </div>
                <div class="country-option" data-code="+350" data-country="gi" data-name="Gibraltar">
                    <img src="https://flagcdn.com/24x18/gi.png" alt="Gibraltar" class="flag-icon">
                    <span class="country-name">Gibraltar</span>
                    <span class="country-code">+350</span>
                </div>
                <div class="country-option" data-code="+30" data-country="gr" data-name="Greece">
                    <img src="https://flagcdn.com/24x18/gr.png" alt="Greece" class="flag-icon">
                    <span class="country-name">Greece</span>
                    <span class="country-code">+30</span>
                </div>
                <div class="country-option" data-code="+299" data-country="gl" data-name="Greenland">
                    <img src="https://flagcdn.com/24x18/gl.png" alt="Greenland" class="flag-icon">
                    <span class="country-name">Greenland</span>
                    <span class="country-code">+299</span>
                </div>
                <div class="country-option" data-code="+1" data-country="gd" data-name="Grenada">
                    <img src="https://flagcdn.com/24x18/gd.png" alt="Grenada" class="flag-icon">
                    <span class="country-name">Grenada</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+590" data-country="gp" data-name="Guadeloupe">
                    <img src="https://flagcdn.com/24x18/gp.png" alt="Guadeloupe" class="flag-icon">
                    <span class="country-name">Guadeloupe</span>
                    <span class="country-code">+590</span>
                </div>
                <div class="country-option" data-code="+1" data-country="gu" data-name="Guam">
                    <img src="https://flagcdn.com/24x18/gu.png" alt="Guam" class="flag-icon">
                    <span class="country-name">Guam</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+502" data-country="gt" data-name="Guatemala">
                    <img src="https://flagcdn.com/24x18/gt.png" alt="Guatemala" class="flag-icon">
                    <span class="country-name">Guatemala</span>
                    <span class="country-code">+502</span>
                </div>
                <div class="country-option" data-code="+44" data-country="gg" data-name="Guernsey">
                    <img src="https://flagcdn.com/24x18/gg.png" alt="Guernsey" class="flag-icon">
                    <span class="country-name">Guernsey</span>
                    <span class="country-code">+44</span>
                </div>
                <div class="country-option" data-code="+224" data-country="gn" data-name="Guinea">
                    <img src="https://flagcdn.com/24x18/gn.png" alt="Guinea" class="flag-icon">
                    <span class="country-name">Guinea</span>
                    <span class="country-code">+224</span>
                </div>
                <div class="country-option" data-code="+245" data-country="gw" data-name="Guinea-Bissau">
                    <img src="https://flagcdn.com/24x18/gw.png" alt="Guinea-Bissau" class="flag-icon">
                    <span class="country-name">Guinea-Bissau</span>
                    <span class="country-code">+245</span>
                </div>
                <div class="country-option" data-code="+592" data-country="gy" data-name="Guyana">
                    <img src="https://flagcdn.com/24x18/gy.png" alt="Guyana" class="flag-icon">
                    <span class="country-name">Guyana</span>
                    <span class="country-code">+592</span>
                </div>
                <div class="country-option" data-code="+509" data-country="ht" data-name="Haiti">
                    <img src="https://flagcdn.com/24x18/ht.png" alt="Haiti" class="flag-icon">
                    <span class="country-name">Haiti</span>
                    <span class="country-code">+509</span>
                </div>
                <div class="country-option" data-code="+504" data-country="hn" data-name="Honduras">
                    <img src="https://flagcdn.com/24x18/hn.png" alt="Honduras" class="flag-icon">
                    <span class="country-name">Honduras</span>
                    <span class="country-code">+504</span>
                </div>
                <div class="country-option" data-code="+852" data-country="hk" data-name="Hong Kong">
                    <img src="https://flagcdn.com/24x18/hk.png" alt="Hong Kong" class="flag-icon">
                    <span class="country-name">Hong Kong</span>
                    <span class="country-code">+852</span>
                </div>
                <div class="country-option" data-code="+36" data-country="hu" data-name="Hungary">
                    <img src="https://flagcdn.com/24x18/hu.png" alt="Hungary" class="flag-icon">
                    <span class="country-name">Hungary</span>
                    <span class="country-code">+36</span>
                </div>
                <div class="country-option" data-code="+354" data-country="is" data-name="Iceland">
                    <img src="https://flagcdn.com/24x18/is.png" alt="Iceland" class="flag-icon">
                    <span class="country-name">Iceland</span>
                    <span class="country-code">+354</span>
                </div>
                <div class="country-option" data-code="+91" data-country="in" data-name="India">
                    <img src="https://flagcdn.com/24x18/in.png" alt="India" class="flag-icon">
                    <span class="country-name">India</span>
                    <span class="country-code">+91</span>
                </div>
                <div class="country-option" data-code="+62" data-country="id" data-name="Indonesia">
                    <img src="https://flagcdn.com/24x18/id.png" alt="Indonesia" class="flag-icon">
                    <span class="country-name">Indonesia</span>
                    <span class="country-code">+62</span>
                </div>
                <div class="country-option" data-code="+98" data-country="ir" data-name="Iran">
                    <img src="https://flagcdn.com/24x18/ir.png" alt="Iran" class="flag-icon">
                    <span class="country-name">Iran</span>
                    <span class="country-code">+98</span>
                </div>
                <div class="country-option" data-code="+964" data-country="iq" data-name="Iraq">
                    <img src="https://flagcdn.com/24x18/iq.png" alt="Iraq" class="flag-icon">
                    <span class="country-name">Iraq</span>
                    <span class="country-code">+964</span>
                </div>
                <div class="country-option" data-code="+353" data-country="ie" data-name="Ireland">
                    <img src="https://flagcdn.com/24x18/ie.png" alt="Ireland" class="flag-icon">
                    <span class="country-name">Ireland</span>
                    <span class="country-code">+353</span>
                </div>
                <div class="country-option" data-code="+44" data-country="im" data-name="Isle of Man">
                    <img src="https://flagcdn.com/24x18/im.png" alt="Isle of Man" class="flag-icon">
                    <span class="country-name">Isle of Man</span>
                    <span class="country-code">+44</span>
                </div>
                <div class="country-option" data-code="+972" data-country="il" data-name="Israel">
                    <img src="https://flagcdn.com/24x18/il.png" alt="Israel" class="flag-icon">
                    <span class="country-name">Israel</span>
                    <span class="country-code">+972</span>
                </div>
                <div class="country-option" data-code="+39" data-country="it" data-name="Italy">
                    <img src="https://flagcdn.com/24x18/it.png" alt="Italy" class="flag-icon">
                    <span class="country-name">Italy</span>
                    <span class="country-code">+39</span>
                </div>
                <div class="country-option" data-code="+225" data-country="ci" data-name="Ivory Coast">
                    <img src="https://flagcdn.com/24x18/ci.png" alt="Ivory Coast" class="flag-icon">
                    <span class="country-name">Ivory Coast</span>
                    <span class="country-code">+225</span>
                </div>
                <div class="country-option" data-code="+1" data-country="jm" data-name="Jamaica">
                    <img src="https://flagcdn.com/24x18/jm.png" alt="Jamaica" class="flag-icon">
                    <span class="country-name">Jamaica</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+81" data-country="jp" data-name="Japan">
                    <img src="https://flagcdn.com/24x18/jp.png" alt="Japan" class="flag-icon">
                    <span class="country-name">Japan</span>
                    <span class="country-code">+81</span>
                </div>
                <div class="country-option" data-code="+44" data-country="je" data-name="Jersey">
                    <img src="https://flagcdn.com/24x18/je.png" alt="Jersey" class="flag-icon">
                    <span class="country-name">Jersey</span>
                    <span class="country-code">+44</span>
                </div>
                <div class="country-option" data-code="+962" data-country="jo" data-name="Jordan">
                    <img src="https://flagcdn.com/24x18/jo.png" alt="Jordan" class="flag-icon">
                    <span class="country-name">Jordan</span>
                    <span class="country-code">+962</span>
                </div>
                <div class="country-option" data-code="+7" data-country="kz" data-name="Kazakhstan">
                    <img src="https://flagcdn.com/24x18/kz.png" alt="Kazakhstan" class="flag-icon">
                    <span class="country-name">Kazakhstan</span>
                    <span class="country-code">+7</span>
                </div>
                <div class="country-option" data-code="+254" data-country="ke" data-name="Kenya">
                    <img src="https://flagcdn.com/24x18/ke.png" alt="Kenya" class="flag-icon">
                    <span class="country-name">Kenya</span>
                    <span class="country-code">+254</span>
                </div>
                <div class="country-option" data-code="+686" data-country="ki" data-name="Kiribati">
                    <img src="https://flagcdn.com/24x18/ki.png" alt="Kiribati" class="flag-icon">
                    <span class="country-name">Kiribati</span>
                    <span class="country-code">+686</span>
                </div>
                <div class="country-option" data-code="+383" data-country="xk" data-name="Kosovo">
                    <img src="https://flagcdn.com/24x18/xk.png" alt="Kosovo" class="flag-icon">
                    <span class="country-name">Kosovo</span>
                    <span class="country-code">+383</span>
                </div>
                <div class="country-option" data-code="+965" data-country="kw" data-name="Kuwait">
                    <img src="https://flagcdn.com/24x18/kw.png" alt="Kuwait" class="flag-icon">
                    <span class="country-name">Kuwait</span>
                    <span class="country-code">+965</span>
                </div>
                <div class="country-option" data-code="+996" data-country="kg" data-name="Kyrgyzstan">
                    <img src="https://flagcdn.com/24x18/kg.png" alt="Kyrgyzstan" class="flag-icon">
                    <span class="country-name">Kyrgyzstan</span>
                    <span class="country-code">+996</span>
                </div>
                <div class="country-option" data-code="+856" data-country="la" data-name="Laos">
                    <img src="https://flagcdn.com/24x18/la.png" alt="Laos" class="flag-icon">
                    <span class="country-name">Laos</span>
                    <span class="country-code">+856</span>
                </div>
                <div class="country-option" data-code="+371" data-country="lv" data-name="Latvia">
                    <img src="https://flagcdn.com/24x18/lv.png" alt="Latvia" class="flag-icon">
                    <span class="country-name">Latvia</span>
                    <span class="country-code">+371</span>
                </div>
                <div class="country-option" data-code="+961" data-country="lb" data-name="Lebanon">
                    <img src="https://flagcdn.com/24x18/lb.png" alt="Lebanon" class="flag-icon">
                    <span class="country-name">Lebanon</span>
                    <span class="country-code">+961</span>
                </div>
                <div class="country-option" data-code="+266" data-country="ls" data-name="Lesotho">
                    <img src="https://flagcdn.com/24x18/ls.png" alt="Lesotho" class="flag-icon">
                    <span class="country-name">Lesotho</span>
                    <span class="country-code">+266</span>
                </div>
                <div class="country-option" data-code="+231" data-country="lr" data-name="Liberia">
                    <img src="https://flagcdn.com/24x18/lr.png" alt="Liberia" class="flag-icon">
                    <span class="country-name">Liberia</span>
                    <span class="country-code">+231</span>
                </div>
                <div class="country-option" data-code="+218" data-country="ly" data-name="Libya">
                    <img src="https://flagcdn.com/24x18/ly.png" alt="Libya" class="flag-icon">
                    <span class="country-name">Libya</span>
                    <span class="country-code">+218</span>
                </div>
                <div class="country-option" data-code="+423" data-country="li" data-name="Liechtenstein">
                    <img src="https://flagcdn.com/24x18/li.png" alt="Liechtenstein" class="flag-icon">
                    <span class="country-name">Liechtenstein</span>
                    <span class="country-code">+423</span>
                </div>
                <div class="country-option" data-code="+370" data-country="lt" data-name="Lithuania">
                    <img src="https://flagcdn.com/24x18/lt.png" alt="Lithuania" class="flag-icon">
                    <span class="country-name">Lithuania</span>
                    <span class="country-code">+370</span>
                </div>
                <div class="country-option" data-code="+352" data-country="lu" data-name="Luxembourg">
                    <img src="https://flagcdn.com/24x18/lu.png" alt="Luxembourg" class="flag-icon">
                    <span class="country-name">Luxembourg</span>
                    <span class="country-code">+352</span>
                </div>
                <div class="country-option" data-code="+853" data-country="mo" data-name="Macau">
                    <img src="https://flagcdn.com/24x18/mo.png" alt="Macau" class="flag-icon">
                    <span class="country-name">Macau</span>
                    <span class="country-code">+853</span>
                </div>
                <div class="country-option" data-code="+261" data-country="mg" data-name="Madagascar">
                    <img src="https://flagcdn.com/24x18/mg.png" alt="Madagascar" class="flag-icon">
                    <span class="country-name">Madagascar</span>
                    <span class="country-code">+261</span>
                </div>
                <div class="country-option" data-code="+265" data-country="mw" data-name="Malawi">
                    <img src="https://flagcdn.com/24x18/mw.png" alt="Malawi" class="flag-icon">
                    <span class="country-name">Malawi</span>
                    <span class="country-code">+265</span>
                </div>
                <div class="country-option" data-code="+60" data-country="my" data-name="Malaysia">
                    <img src="https://flagcdn.com/24x18/my.png" alt="Malaysia" class="flag-icon">
                    <span class="country-name">Malaysia</span>
                    <span class="country-code">+60</span>
                </div>
                <div class="country-option" data-code="+960" data-country="mv" data-name="Maldives">
                    <img src="https://flagcdn.com/24x18/mv.png" alt="Maldives" class="flag-icon">
                    <span class="country-name">Maldives</span>
                    <span class="country-code">+960</span>
                </div>
                <div class="country-option" data-code="+223" data-country="ml" data-name="Mali">
                    <img src="https://flagcdn.com/24x18/ml.png" alt="Mali" class="flag-icon">
                    <span class="country-name">Mali</span>
                    <span class="country-code">+223</span>
                </div>
                <div class="country-option" data-code="+356" data-country="mt" data-name="Malta">
                    <img src="https://flagcdn.com/24x18/mt.png" alt="Malta" class="flag-icon">
                    <span class="country-name">Malta</span>
                    <span class="country-code">+356</span>
                </div>
                <div class="country-option" data-code="+692" data-country="mh" data-name="Marshall Islands">
                    <img src="https://flagcdn.com/24x18/mh.png" alt="Marshall Islands" class="flag-icon">
                    <span class="country-name">Marshall Islands</span>
                    <span class="country-code">+692</span>
                </div>
                <div class="country-option" data-code="+596" data-country="mq" data-name="Martinique">
                    <img src="https://flagcdn.com/24x18/mq.png" alt="Martinique" class="flag-icon">
                    <span class="country-name">Martinique</span>
                    <span class="country-code">+596</span>
                </div>
                <div class="country-option" data-code="+222" data-country="mr" data-name="Mauritania">
                    <img src="https://flagcdn.com/24x18/mr.png" alt="Mauritania" class="flag-icon">
                    <span class="country-name">Mauritania</span>
                    <span class="country-code">+222</span>
                </div>
                <div class="country-option" data-code="+230" data-country="mu" data-name="Mauritius">
                    <img src="https://flagcdn.com/24x18/mu.png" alt="Mauritius" class="flag-icon">
                    <span class="country-name">Mauritius</span>
                    <span class="country-code">+230</span>
                </div>
                <div class="country-option" data-code="+262" data-country="yt" data-name="Mayotte">
                    <img src="https://flagcdn.com/24x18/yt.png" alt="Mayotte" class="flag-icon">
                    <span class="country-name">Mayotte</span>
                    <span class="country-code">+262</span>
                </div>
                <div class="country-option" data-code="+52" data-country="mx" data-name="Mexico">
                    <img src="https://flagcdn.com/24x18/mx.png" alt="Mexico" class="flag-icon">
                    <span class="country-name">Mexico</span>
                    <span class="country-code">+52</span>
                </div>
                <div class="country-option" data-code="+691" data-country="fm" data-name="Micronesia">
                    <img src="https://flagcdn.com/24x18/fm.png" alt="Micronesia" class="flag-icon">
                    <span class="country-name">Micronesia</span>
                    <span class="country-code">+691</span>
                </div>
                <div class="country-option" data-code="+373" data-country="md" data-name="Moldova">
                    <img src="https://flagcdn.com/24x18/md.png" alt="Moldova" class="flag-icon">
                    <span class="country-name">Moldova</span>
                    <span class="country-code">+373</span>
                </div>
                <div class="country-option" data-code="+377" data-country="mc" data-name="Monaco">
                    <img src="https://flagcdn.com/24x18/mc.png" alt="Monaco" class="flag-icon">
                    <span class="country-name">Monaco</span>
                    <span class="country-code">+377</span>
                </div>
                <div class="country-option" data-code="+976" data-country="mn" data-name="Mongolia">
                    <img src="https://flagcdn.com/24x18/mn.png" alt="Mongolia" class="flag-icon">
                    <span class="country-name">Mongolia</span>
                    <span class="country-code">+976</span>
                </div>
                <div class="country-option" data-code="+382" data-country="me" data-name="Montenegro">
                    <img src="https://flagcdn.com/24x18/me.png" alt="Montenegro" class="flag-icon">
                    <span class="country-name">Montenegro</span>
                    <span class="country-code">+382</span>
                </div>
                <div class="country-option" data-code="+1" data-country="ms" data-name="Montserrat">
                    <img src="https://flagcdn.com/24x18/ms.png" alt="Montserrat" class="flag-icon">
                    <span class="country-name">Montserrat</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+212" data-country="ma" data-name="Morocco">
                    <img src="https://flagcdn.com/24x18/ma.png" alt="Morocco" class="flag-icon">
                    <span class="country-name">Morocco</span>
                    <span class="country-code">+212</span>
                </div>
                <div class="country-option" data-code="+258" data-country="mz" data-name="Mozambique">
                    <img src="https://flagcdn.com/24x18/mz.png" alt="Mozambique" class="flag-icon">
                    <span class="country-name">Mozambique</span>
                    <span class="country-code">+258</span>
                </div>
                <div class="country-option" data-code="+95" data-country="mm" data-name="Myanmar">
                    <img src="https://flagcdn.com/24x18/mm.png" alt="Myanmar" class="flag-icon">
                    <span class="country-name">Myanmar</span>
                    <span class="country-code">+95</span>
                </div>
                <div class="country-option" data-code="+264" data-country="na" data-name="Namibia">
                    <img src="https://flagcdn.com/24x18/na.png" alt="Namibia" class="flag-icon">
                    <span class="country-name">Namibia</span>
                    <span class="country-code">+264</span>
                </div>
                <div class="country-option" data-code="+674" data-country="nr" data-name="Nauru">
                    <img src="https://flagcdn.com/24x18/nr.png" alt="Nauru" class="flag-icon">
                    <span class="country-name">Nauru</span>
                    <span class="country-code">+674</span>
                </div>
                <div class="country-option" data-code="+977" data-country="np" data-name="Nepal">
                    <img src="https://flagcdn.com/24x18/np.png" alt="Nepal" class="flag-icon">
                    <span class="country-name">Nepal</span>
                    <span class="country-code">+977</span>
                </div>
                <div class="country-option" data-code="+31" data-country="nl" data-name="Netherlands">
                    <img src="https://flagcdn.com/24x18/nl.png" alt="Netherlands" class="flag-icon">
                    <span class="country-name">Netherlands</span>
                    <span class="country-code">+31</span>
                </div>
                <div class="country-option" data-code="+687" data-country="nc" data-name="New Caledonia">
                    <img src="https://flagcdn.com/24x18/nc.png" alt="New Caledonia" class="flag-icon">
                    <span class="country-name">New Caledonia</span>
                    <span class="country-code">+687</span>
                </div>
                <div class="country-option" data-code="+64" data-country="nz" data-name="New Zealand">
                    <img src="https://flagcdn.com/24x18/nz.png" alt="New Zealand" class="flag-icon">
                    <span class="country-name">New Zealand</span>
                    <span class="country-code">+64</span>
                </div>
                <div class="country-option" data-code="+505" data-country="ni" data-name="Nicaragua">
                    <img src="https://flagcdn.com/24x18/ni.png" alt="Nicaragua" class="flag-icon">
                    <span class="country-name">Nicaragua</span>
                    <span class="country-code">+505</span>
                </div>
                <div class="country-option" data-code="+227" data-country="ne" data-name="Niger">
                    <img src="https://flagcdn.com/24x18/ne.png" alt="Niger" class="flag-icon">
                    <span class="country-name">Niger</span>
                    <span class="country-code">+227</span>
                </div>
                <div class="country-option" data-code="+234" data-country="ng" data-name="Nigeria">
                    <img src="https://flagcdn.com/24x18/ng.png" alt="Nigeria" class="flag-icon">
                    <span class="country-name">Nigeria</span>
                    <span class="country-code">+234</span>
                </div>
                <div class="country-option" data-code="+683" data-country="nu" data-name="Niue">
                    <img src="https://flagcdn.com/24x18/nu.png" alt="Niue" class="flag-icon">
                    <span class="country-name">Niue</span>
                    <span class="country-code">+683</span>
                </div>
                <div class="country-option" data-code="+672" data-country="nf" data-name="Norfolk Island">
                    <img src="https://flagcdn.com/24x18/nf.png" alt="Norfolk Island" class="flag-icon">
                    <span class="country-name">Norfolk Island</span>
                    <span class="country-code">+672</span>
                </div>
                <div class="country-option" data-code="+850" data-country="kp" data-name="North Korea">
                    <img src="https://flagcdn.com/24x18/kp.png" alt="North Korea" class="flag-icon">
                    <span class="country-name">North Korea</span>
                    <span class="country-code">+850</span>
                </div>
                <div class="country-option" data-code="+389" data-country="mk" data-name="North Macedonia">
                    <img src="https://flagcdn.com/24x18/mk.png" alt="North Macedonia" class="flag-icon">
                    <span class="country-name">North Macedonia</span>
                    <span class="country-code">+389</span>
                </div>
                <div class="country-option" data-code="+1" data-country="mp" data-name="Northern Mariana Islands">
                    <img src="https://flagcdn.com/24x18/mp.png" alt="Northern Mariana Islands" class="flag-icon">
                    <span class="country-name">Northern Mariana Islands</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+47" data-country="no" data-name="Norway">
                    <img src="https://flagcdn.com/24x18/no.png" alt="Norway" class="flag-icon">
                    <span class="country-name">Norway</span>
                    <span class="country-code">+47</span>
                </div>
                <div class="country-option" data-code="+968" data-country="om" data-name="Oman">
                    <img src="https://flagcdn.com/24x18/om.png" alt="Oman" class="flag-icon">
                    <span class="country-name">Oman</span>
                    <span class="country-code">+968</span>
                </div>
                <div class="country-option" data-code="+92" data-country="pk" data-name="Pakistan">
                    <img src="https://flagcdn.com/24x18/pk.png" alt="Pakistan" class="flag-icon">
                    <span class="country-name">Pakistan</span>
                    <span class="country-code">+92</span>
                </div>
                <div class="country-option" data-code="+680" data-country="pw" data-name="Palau">
                    <img src="https://flagcdn.com/24x18/pw.png" alt="Palau" class="flag-icon">
                    <span class="country-name">Palau</span>
                    <span class="country-code">+680</span>
                </div>
                <div class="country-option" data-code="+970" data-country="ps" data-name="Palestine">
                    <img src="https://flagcdn.com/24x18/ps.png" alt="Palestine" class="flag-icon">
                    <span class="country-name">Palestine</span>
                    <span class="country-code">+970</span>
                </div>
                <div class="country-option" data-code="+507" data-country="pa" data-name="Panama">
                    <img src="https://flagcdn.com/24x18/pa.png" alt="Panama" class="flag-icon">
                    <span class="country-name">Panama</span>
                    <span class="country-code">+507</span>
                </div>
                <div class="country-option" data-code="+675" data-country="pg" data-name="Papua New Guinea">
                    <img src="https://flagcdn.com/24x18/pg.png" alt="Papua New Guinea" class="flag-icon">
                    <span class="country-name">Papua New Guinea</span>
                    <span class="country-code">+675</span>
                </div>
                <div class="country-option" data-code="+595" data-country="py" data-name="Paraguay">
                    <img src="https://flagcdn.com/24x18/py.png" alt="Paraguay" class="flag-icon">
                    <span class="country-name">Paraguay</span>
                    <span class="country-code">+595</span>
                </div>
                <div class="country-option" data-code="+51" data-country="pe" data-name="Peru">
                    <img src="https://flagcdn.com/24x18/pe.png" alt="Peru" class="flag-icon">
                    <span class="country-name">Peru</span>
                    <span class="country-code">+51</span>
                </div>
                <div class="country-option" data-code="+63" data-country="ph" data-name="Philippines">
                    <img src="https://flagcdn.com/24x18/ph.png" alt="Philippines" class="flag-icon">
                    <span class="country-name">Philippines</span>
                    <span class="country-code">+63</span>
                </div>
                <div class="country-option" data-code="+48" data-country="pl" data-name="Poland">
                    <img src="https://flagcdn.com/24x18/pl.png" alt="Poland" class="flag-icon">
                    <span class="country-name">Poland</span>
                    <span class="country-code">+48</span>
                </div>
                <div class="country-option" data-code="+351" data-country="pt" data-name="Portugal">
                    <img src="https://flagcdn.com/24x18/pt.png" alt="Portugal" class="flag-icon">
                    <span class="country-name">Portugal</span>
                    <span class="country-code">+351</span>
                </div>
                <div class="country-option" data-code="+1" data-country="pr" data-name="Puerto Rico">
                    <img src="https://flagcdn.com/24x18/pr.png" alt="Puerto Rico" class="flag-icon">
                    <span class="country-name">Puerto Rico</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+974" data-country="qa" data-name="Qatar">
                    <img src="https://flagcdn.com/24x18/qa.png" alt="Qatar" class="flag-icon">
                    <span class="country-name">Qatar</span>
                    <span class="country-code">+974</span>
                </div>
                <div class="country-option" data-code="+242" data-country="cg" data-name="Republic of the Congo">
                    <img src="https://flagcdn.com/24x18/cg.png" alt="Republic of the Congo" class="flag-icon">
                    <span class="country-name">Republic of the Congo</span>
                    <span class="country-code">+242</span>
                </div>
                <div class="country-option" data-code="+262" data-country="re" data-name="Reunion">
                    <img src="https://flagcdn.com/24x18/re.png" alt="Reunion" class="flag-icon">
                    <span class="country-name">Reunion</span>
                    <span class="country-code">+262</span>
                </div>
                <div class="country-option" data-code="+40" data-country="ro" data-name="Romania">
                    <img src="https://flagcdn.com/24x18/ro.png" alt="Romania" class="flag-icon">
                    <span class="country-name">Romania</span>
                    <span class="country-code">+40</span>
                </div>
                <div class="country-option" data-code="+7" data-country="ru" data-name="Russia">
                    <img src="https://flagcdn.com/24x18/ru.png" alt="Russia" class="flag-icon">
                    <span class="country-name">Russia</span>
                    <span class="country-code">+7</span>
                </div>
                <div class="country-option" data-code="+250" data-country="rw" data-name="Rwanda">
                    <img src="https://flagcdn.com/24x18/rw.png" alt="Rwanda" class="flag-icon">
                    <span class="country-name">Rwanda</span>
                    <span class="country-code">+250</span>
                </div>
                <div class="country-option" data-code="+590" data-country="bl" data-name="Saint Barthelemy">
                    <img src="https://flagcdn.com/24x18/bl.png" alt="Saint Barthelemy" class="flag-icon">
                    <span class="country-name">Saint Barthelemy</span>
                    <span class="country-code">+590</span>
                </div>
                <div class="country-option" data-code="+290" data-country="sh" data-name="Saint Helena">
                    <img src="https://flagcdn.com/24x18/sh.png" alt="Saint Helena" class="flag-icon">
                    <span class="country-name">Saint Helena</span>
                    <span class="country-code">+290</span>
                </div>
                <div class="country-option" data-code="+1" data-country="kn" data-name="Saint Kitts and Nevis">
                    <img src="https://flagcdn.com/24x18/kn.png" alt="Saint Kitts and Nevis" class="flag-icon">
                    <span class="country-name">Saint Kitts and Nevis</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+1" data-country="lc" data-name="Saint Lucia">
                    <img src="https://flagcdn.com/24x18/lc.png" alt="Saint Lucia" class="flag-icon">
                    <span class="country-name">Saint Lucia</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+590" data-country="mf" data-name="Saint Martin">
                    <img src="https://flagcdn.com/24x18/mf.png" alt="Saint Martin" class="flag-icon">
                    <span class="country-name">Saint Martin</span>
                    <span class="country-code">+590</span>
                </div>
                <div class="country-option" data-code="+508" data-country="pm" data-name="Saint Pierre and Miquelon">
                    <img src="https://flagcdn.com/24x18/pm.png" alt="Saint Pierre and Miquelon" class="flag-icon">
                    <span class="country-name">Saint Pierre and Miquelon</span>
                    <span class="country-code">+508</span>
                </div>
                <div class="country-option" data-code="+1" data-country="vc" data-name="Saint Vincent and the Grenadines">
                    <img src="https://flagcdn.com/24x18/vc.png" alt="Saint Vincent and the Grenadines" class="flag-icon">
                    <span class="country-name">Saint Vincent and the Grenadines</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+685" data-country="ws" data-name="Samoa">
                    <img src="https://flagcdn.com/24x18/ws.png" alt="Samoa" class="flag-icon">
                    <span class="country-name">Samoa</span>
                    <span class="country-code">+685</span>
                </div>
                <div class="country-option" data-code="+378" data-country="sm" data-name="San Marino">
                    <img src="https://flagcdn.com/24x18/sm.png" alt="San Marino" class="flag-icon">
                    <span class="country-name">San Marino</span>
                    <span class="country-code">+378</span>
                </div>
                <div class="country-option" data-code="+239" data-country="st" data-name="Sao Tome and Principe">
                    <img src="https://flagcdn.com/24x18/st.png" alt="Sao Tome and Principe" class="flag-icon">
                    <span class="country-name">Sao Tome and Principe</span>
                    <span class="country-code">+239</span>
                </div>
                <div class="country-option" data-code="+966" data-country="sa" data-name="Saudi Arabia">
                    <img src="https://flagcdn.com/24x18/sa.png" alt="Saudi Arabia" class="flag-icon">
                    <span class="country-name">Saudi Arabia</span>
                    <span class="country-code">+966</span>
                </div>
                <div class="country-option" data-code="+221" data-country="sn" data-name="Senegal">
                    <img src="https://flagcdn.com/24x18/sn.png" alt="Senegal" class="flag-icon">
                    <span class="country-name">Senegal</span>
                    <span class="country-code">+221</span>
                </div>
                <div class="country-option" data-code="+381" data-country="rs" data-name="Serbia">
                    <img src="https://flagcdn.com/24x18/rs.png" alt="Serbia" class="flag-icon">
                    <span class="country-name">Serbia</span>
                    <span class="country-code">+381</span>
                </div>
                <div class="country-option" data-code="+248" data-country="sc" data-name="Seychelles">
                    <img src="https://flagcdn.com/24x18/sc.png" alt="Seychelles" class="flag-icon">
                    <span class="country-name">Seychelles</span>
                    <span class="country-code">+248</span>
                </div>
                <div class="country-option" data-code="+232" data-country="sl" data-name="Sierra Leone">
                    <img src="https://flagcdn.com/24x18/sl.png" alt="Sierra Leone" class="flag-icon">
                    <span class="country-name">Sierra Leone</span>
                    <span class="country-code">+232</span>
                </div>
                <div class="country-option" data-code="+65" data-country="sg" data-name="Singapore">
                    <img src="https://flagcdn.com/24x18/sg.png" alt="Singapore" class="flag-icon">
                    <span class="country-name">Singapore</span>
                    <span class="country-code">+65</span>
                </div>
                <div class="country-option" data-code="+1" data-country="sx" data-name="Sint Maarten">
                    <img src="https://flagcdn.com/24x18/sx.png" alt="Sint Maarten" class="flag-icon">
                    <span class="country-name">Sint Maarten</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+421" data-country="sk" data-name="Slovakia">
                    <img src="https://flagcdn.com/24x18/sk.png" alt="Slovakia" class="flag-icon">
                    <span class="country-name">Slovakia</span>
                    <span class="country-code">+421</span>
                </div>
                <div class="country-option" data-code="+386" data-country="si" data-name="Slovenia">
                    <img src="https://flagcdn.com/24x18/si.png" alt="Slovenia" class="flag-icon">
                    <span class="country-name">Slovenia</span>
                    <span class="country-code">+386</span>
                </div>
                <div class="country-option" data-code="+677" data-country="sb" data-name="Solomon Islands">
                    <img src="https://flagcdn.com/24x18/sb.png" alt="Solomon Islands" class="flag-icon">
                    <span class="country-name">Solomon Islands</span>
                    <span class="country-code">+677</span>
                </div>
                <div class="country-option" data-code="+252" data-country="so" data-name="Somalia">
                    <img src="https://flagcdn.com/24x18/so.png" alt="Somalia" class="flag-icon">
                    <span class="country-name">Somalia</span>
                    <span class="country-code">+252</span>
                </div>
                <div class="country-option" data-code="+27" data-country="za" data-name="South Africa">
                    <img src="https://flagcdn.com/24x18/za.png" alt="South Africa" class="flag-icon">
                    <span class="country-name">South Africa</span>
                    <span class="country-code">+27</span>
                </div>
                <div class="country-option" data-code="+82" data-country="kr" data-name="South Korea">
                    <img src="https://flagcdn.com/24x18/kr.png" alt="South Korea" class="flag-icon">
                    <span class="country-name">South Korea</span>
                    <span class="country-code">+82</span>
                </div>
                <div class="country-option" data-code="+211" data-country="ss" data-name="South Sudan">
                    <img src="https://flagcdn.com/24x18/ss.png" alt="South Sudan" class="flag-icon">
                    <span class="country-name">South Sudan</span>
                    <span class="country-code">+211</span>
                </div>
                <div class="country-option" data-code="+34" data-country="es" data-name="Spain">
                    <img src="https://flagcdn.com/24x18/es.png" alt="Spain" class="flag-icon">
                    <span class="country-name">Spain</span>
                    <span class="country-code">+34</span>
                </div>
                <div class="country-option" data-code="+94" data-country="lk" data-name="Sri Lanka">
                    <img src="https://flagcdn.com/24x18/lk.png" alt="Sri Lanka" class="flag-icon">
                    <span class="country-name">Sri Lanka</span>
                    <span class="country-code">+94</span>
                </div>
                <div class="country-option" data-code="+249" data-country="sd" data-name="Sudan">
                    <img src="https://flagcdn.com/24x18/sd.png" alt="Sudan" class="flag-icon">
                    <span class="country-name">Sudan</span>
                    <span class="country-code">+249</span>
                </div>
                <div class="country-option" data-code="+597" data-country="sr" data-name="Suriname">
                    <img src="https://flagcdn.com/24x18/sr.png" alt="Suriname" class="flag-icon">
                    <span class="country-name">Suriname</span>
                    <span class="country-code">+597</span>
                </div>
                <div class="country-option" data-code="+47" data-country="sj" data-name="Svalbard and Jan Mayen">
                    <img src="https://flagcdn.com/24x18/sj.png" alt="Svalbard and Jan Mayen" class="flag-icon">
                    <span class="country-name">Svalbard and Jan Mayen</span>
                    <span class="country-code">+47</span>
                </div>
                <div class="country-option" data-code="+46" data-country="se" data-name="Sweden">
                    <img src="https://flagcdn.com/24x18/se.png" alt="Sweden" class="flag-icon">
                    <span class="country-name">Sweden</span>
                    <span class="country-code">+46</span>
                </div>
                <div class="country-option" data-code="+41" data-country="ch" data-name="Switzerland">
                    <img src="https://flagcdn.com/24x18/ch.png" alt="Switzerland" class="flag-icon">
                    <span class="country-name">Switzerland</span>
                    <span class="country-code">+41</span>
                </div>
                <div class="country-option" data-code="+963" data-country="sy" data-name="Syria">
                    <img src="https://flagcdn.com/24x18/sy.png" alt="Syria" class="flag-icon">
                    <span class="country-name">Syria</span>
                    <span class="country-code">+963</span>
                </div>
                <div class="country-option" data-code="+886" data-country="tw" data-name="Taiwan">
                    <img src="https://flagcdn.com/24x18/tw.png" alt="Taiwan" class="flag-icon">
                    <span class="country-name">Taiwan</span>
                    <span class="country-code">+886</span>
                </div>
                <div class="country-option" data-code="+992" data-country="tj" data-name="Tajikistan">
                    <img src="https://flagcdn.com/24x18/tj.png" alt="Tajikistan" class="flag-icon">
                    <span class="country-name">Tajikistan</span>
                    <span class="country-code">+992</span>
                </div>
                <div class="country-option" data-code="+255" data-country="tz" data-name="Tanzania">
                    <img src="https://flagcdn.com/24x18/tz.png" alt="Tanzania" class="flag-icon">
                    <span class="country-name">Tanzania</span>
                    <span class="country-code">+255</span>
                </div>
                <div class="country-option" data-code="+66" data-country="th" data-name="Thailand">
                    <img src="https://flagcdn.com/24x18/th.png" alt="Thailand" class="flag-icon">
                    <span class="country-name">Thailand</span>
                    <span class="country-code">+66</span>
                </div>
                <div class="country-option" data-code="+228" data-country="tg" data-name="Togo">
                    <img src="https://flagcdn.com/24x18/tg.png" alt="Togo" class="flag-icon">
                    <span class="country-name">Togo</span>
                    <span class="country-code">+228</span>
                </div>
                <div class="country-option" data-code="+690" data-country="tk" data-name="Tokelau">
                    <img src="https://flagcdn.com/24x18/tk.png" alt="Tokelau" class="flag-icon">
                    <span class="country-name">Tokelau</span>
                    <span class="country-code">+690</span>
                </div>
                <div class="country-option" data-code="+676" data-country="to" data-name="Tonga">
                    <img src="https://flagcdn.com/24x18/to.png" alt="Tonga" class="flag-icon">
                    <span class="country-name">Tonga</span>
                    <span class="country-code">+676</span>
                </div>
                <div class="country-option" data-code="+1" data-country="tt" data-name="Trinidad and Tobago">
                    <img src="https://flagcdn.com/24x18/tt.png" alt="Trinidad and Tobago" class="flag-icon">
                    <span class="country-name">Trinidad and Tobago</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+216" data-country="tn" data-name="Tunisia">
                    <img src="https://flagcdn.com/24x18/tn.png" alt="Tunisia" class="flag-icon">
                    <span class="country-name">Tunisia</span>
                    <span class="country-code">+216</span>
                </div>
                <div class="country-option" data-code="+90" data-country="tr" data-name="Turkey">
                    <img src="https://flagcdn.com/24x18/tr.png" alt="Turkey" class="flag-icon">
                    <span class="country-name">Turkey</span>
                    <span class="country-code">+90</span>
                </div>
                <div class="country-option" data-code="+993" data-country="tm" data-name="Turkmenistan">
                    <img src="https://flagcdn.com/24x18/tm.png" alt="Turkmenistan" class="flag-icon">
                    <span class="country-name">Turkmenistan</span>
                    <span class="country-code">+993</span>
                </div>
                <div class="country-option" data-code="+1" data-country="tc" data-name="Turks and Caicos Islands">
                    <img src="https://flagcdn.com/24x18/tc.png" alt="Turks and Caicos Islands" class="flag-icon">
                    <span class="country-name">Turks and Caicos Islands</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+688" data-country="tv" data-name="Tuvalu">
                    <img src="https://flagcdn.com/24x18/tv.png" alt="Tuvalu" class="flag-icon">
                    <span class="country-name">Tuvalu</span>
                    <span class="country-code">+688</span>
                </div>
                <div class="country-option" data-code="+256" data-country="ug" data-name="Uganda">
                    <img src="https://flagcdn.com/24x18/ug.png" alt="Uganda" class="flag-icon">
                    <span class="country-name">Uganda</span>
                    <span class="country-code">+256</span>
                </div>
                <div class="country-option" data-code="+380" data-country="ua" data-name="Ukraine">
                    <img src="https://flagcdn.com/24x18/ua.png" alt="Ukraine" class="flag-icon">
                    <span class="country-name">Ukraine</span>
                    <span class="country-code">+380</span>
                </div>
                <div class="country-option" data-code="+971" data-country="ae" data-name="United Arab Emirates">
                    <img src="https://flagcdn.com/24x18/ae.png" alt="United Arab Emirates" class="flag-icon">
                    <span class="country-name">United Arab Emirates</span>
                    <span class="country-code">+971</span>
                </div>
                <div class="country-option" data-code="+44" data-country="gb" data-name="United Kingdom">
                    <img src="https://flagcdn.com/24x18/gb.png" alt="United Kingdom" class="flag-icon">
                    <span class="country-name">United Kingdom</span>
                    <span class="country-code">+44</span>
                </div>
                <div class="country-option" data-code="+1" data-country="us" data-name="United States">
                    <img src="https://flagcdn.com/24x18/us.png" alt="United States" class="flag-icon">
                    <span class="country-name">United States</span>
                    <span class="country-code">+1</span>
                </div>
                <div class="country-option" data-code="+598" data-country="uy" data-name="Uruguay">
                    <img src="https://flagcdn.com/24x18/uy.png" alt="Uruguay" class="flag-icon">
                    <span class="country-name">Uruguay</span>
                    <span class="country-code">+598</span>
                </div>
                <div class="country-option" data-code="+998" data-country="uz" data-name="Uzbekistan">
                    <img src="https://flagcdn.com/24x18/uz.png" alt="Uzbekistan" class="flag-icon">
                    <span class="country-name">Uzbekistan</span>
                    <span class="country-code">+998</span>
                </div>
                <div class="country-option" data-code="+678" data-country="vu" data-name="Vanuatu">
                    <img src="https://flagcdn.com/24x18/vu.png" alt="Vanuatu" class="flag-icon">
                    <span class="country-name">Vanuatu</span>
                    <span class="country-code">+678</span>
                </div>
                <div class="country-option" data-code="+379" data-country="va" data-name="Vatican City">
                    <img src="https://flagcdn.com/24x18/va.png" alt="Vatican City" class="flag-icon">
                    <span class="country-name">Vatican City</span>
                    <span class="country-code">+379</span>
                </div>
                <div class="country-option" data-code="+58" data-country="ve" data-name="Venezuela">
                    <img src="https://flagcdn.com/24x18/ve.png" alt="Venezuela" class="flag-icon">
                    <span class="country-name">Venezuela</span>
                    <span class="country-code">+58</span>
                </div>
                <div class="country-option" data-code="+84" data-country="vn" data-name="Vietnam">
                    <img src="https://flagcdn.com/24x18/vn.png" alt="Vietnam" class="flag-icon">
                    <span class="country-name">Vietnam</span>
                    <span class="country-code">+84</span>
                </div>
                <div class="country-option" data-code="+681" data-country="wf" data-name="Wallis and Futuna">
                    <img src="https://flagcdn.com/24x18/wf.png" alt="Wallis and Futuna" class="flag-icon">
                    <span class="country-name">Wallis and Futuna</span>
                    <span class="country-code">+681</span>
                </div>
                <div class="country-option" data-code="+212" data-country="eh" data-name="Western Sahara">
                    <img src="https://flagcdn.com/24x18/eh.png" alt="Western Sahara" class="flag-icon">
                    <span class="country-name">Western Sahara</span>
                    <span class="country-code">+212</span>
                </div>
                <div class="country-option" data-code="+967" data-country="ye" data-name="Yemen">
                    <img src="https://flagcdn.com/24x18/ye.png" alt="Yemen" class="flag-icon">
                    <span class="country-name">Yemen</span>
                    <span class="country-code">+967</span>
                </div>
                <div class="country-option" data-code="+260" data-country="zm" data-name="Zambia">
                    <img src="https://flagcdn.com/24x18/zm.png" alt="Zambia" class="flag-icon">
                    <span class="country-name">Zambia</span>
                    <span class="country-code">+260</span>
                </div>
                <div class="country-option" data-code="+263" data-country="zw" data-name="Zimbabwe">
                    <img src="https://flagcdn.com/24x18/zw.png" alt="Zimbabwe" class="flag-icon">
                    <span class="country-name">Zimbabwe</span>
                    <span class="country-code">+263</span>
                </div>
            </div>
        </div>
        <input type="tel" name="phone" placeholder="Phone Number" class="phone-input" required />
        <input type="hidden" name="country_code" value="+91" id="selectedCountryCode" /> <!-- Default selected: India -->
    </div>