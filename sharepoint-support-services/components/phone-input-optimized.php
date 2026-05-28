<div class="mb-2 flex phone-input-container">
    <div class="country-selector">
        <div class="selected-country" onclick="toggleCountryDropdown()">
            <img src="https://flagcdn.com/24x18/in.png" alt="India" class="flag-icon" loading="lazy"> <!-- Default selected: India -->
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
                <!-- Countries will be loaded dynamically -->
                <div class="loading-spinner">Loading countries...</div>
            </div>
        </div>
    </div>
    <input type="tel" name="phone" placeholder="Phone Number" class="phone-input border rounded-lg w-full" required />
    <input type="hidden" name="country_code" value="+91" id="selectedCountryCode" /> <!-- Default selected: India -->
</div>

<script>
    // Countries data - stored in memory for fast access
    const COUNTRIES_DATA = [{
            code: "+93",
            country: "af",
            name: "Afghanistan"
        },
        {
            code: "+355",
            country: "al",
            name: "Albania"
        },
        {
            code: "+213",
            country: "dz",
            name: "Algeria"
        },
        {
            code: "+1",
            country: "as",
            name: "American Samoa"
        },
        {
            code: "+376",
            country: "ad",
            name: "Andorra"
        },
        {
            code: "+244",
            country: "ao",
            name: "Angola"
        },
        {
            code: "+1",
            country: "ai",
            name: "Anguilla"
        },
        {
            code: "+672",
            country: "aq",
            name: "Antarctica"
        },
        {
            code: "+1",
            country: "ag",
            name: "Antigua and Barbuda"
        },
        {
            code: "+54",
            country: "ar",
            name: "Argentina"
        },
        {
            code: "+374",
            country: "am",
            name: "Armenia"
        },
        {
            code: "+297",
            country: "aw",
            name: "Aruba"
        },
        {
            code: "+61",
            country: "au",
            name: "Australia"
        },
        {
            code: "+43",
            country: "at",
            name: "Austria"
        },
        {
            code: "+994",
            country: "az",
            name: "Azerbaijan"
        },
        {
            code: "+1",
            country: "bs",
            name: "Bahamas"
        },
        {
            code: "+973",
            country: "bh",
            name: "Bahrain"
        },
        {
            code: "+880",
            country: "bd",
            name: "Bangladesh"
        },
        {
            code: "+1",
            country: "bb",
            name: "Barbados"
        },
        {
            code: "+375",
            country: "by",
            name: "Belarus"
        },
        {
            code: "+32",
            country: "be",
            name: "Belgium"
        },
        {
            code: "+501",
            country: "bz",
            name: "Belize"
        },
        {
            code: "+229",
            country: "bj",
            name: "Benin"
        },
        {
            code: "+1",
            country: "bm",
            name: "Bermuda"
        },
        {
            code: "+975",
            country: "bt",
            name: "Bhutan"
        },
        {
            code: "+591",
            country: "bo",
            name: "Bolivia"
        },
        {
            code: "+387",
            country: "ba",
            name: "Bosnia and Herzegovina"
        },
        {
            code: "+267",
            country: "bw",
            name: "Botswana"
        },
        {
            code: "+55",
            country: "br",
            name: "Brazil"
        },
        {
            code: "+1",
            country: "vg",
            name: "British Virgin Islands"
        },
        {
            code: "+673",
            country: "bn",
            name: "Brunei"
        },
        {
            code: "+359",
            country: "bg",
            name: "Bulgaria"
        },
        {
            code: "+226",
            country: "bf",
            name: "Burkina Faso"
        },
        {
            code: "+257",
            country: "bi",
            name: "Burundi"
        },
        {
            code: "+855",
            country: "kh",
            name: "Cambodia"
        },
        {
            code: "+237",
            country: "cm",
            name: "Cameroon"
        },
        {
            code: "+1",
            country: "ca",
            name: "Canada"
        },
        {
            code: "+238",
            country: "cv",
            name: "Cape Verde"
        },
        {
            code: "+1",
            country: "ky",
            name: "Cayman Islands"
        },
        {
            code: "+236",
            country: "cf",
            name: "Central African Republic"
        },
        {
            code: "+235",
            country: "td",
            name: "Chad"
        },
        {
            code: "+56",
            country: "cl",
            name: "Chile"
        },
        {
            code: "+86",
            country: "cn",
            name: "China"
        },
        {
            code: "+57",
            country: "co",
            name: "Colombia"
        },
        {
            code: "+269",
            country: "km",
            name: "Comoros"
        },
        {
            code: "+682",
            country: "ck",
            name: "Cook Islands"
        },
        {
            code: "+506",
            country: "cr",
            name: "Costa Rica"
        },
        {
            code: "+225",
            country: "ci",
            name: "Côte d'Ivoire"
        },
        {
            code: "+385",
            country: "hr",
            name: "Croatia"
        },
        {
            code: "+53",
            country: "cu",
            name: "Cuba"
        },
        {
            code: "+357",
            country: "cy",
            name: "Cyprus"
        },
        {
            code: "+420",
            country: "cz",
            name: "Czech Republic"
        },
        {
            code: "+243",
            country: "cd",
            name: "Democratic Republic of the Congo"
        },
        {
            code: "+45",
            country: "dk",
            name: "Denmark"
        },
        {
            code: "+253",
            country: "dj",
            name: "Djibouti"
        },
        {
            code: "+1",
            country: "dm",
            name: "Dominica"
        },
        {
            code: "+1",
            country: "do",
            name: "Dominican Republic"
        },
        {
            code: "+593",
            country: "ec",
            name: "Ecuador"
        },
        {
            code: "+20",
            country: "eg",
            name: "Egypt"
        },
        {
            code: "+503",
            country: "sv",
            name: "El Salvador"
        },
        {
            code: "+240",
            country: "gq",
            name: "Equatorial Guinea"
        },
        {
            code: "+291",
            country: "er",
            name: "Eritrea"
        },
        {
            code: "+372",
            country: "ee",
            name: "Estonia"
        },
        {
            code: "+268",
            country: "sz",
            name: "Eswatini"
        },
        {
            code: "+251",
            country: "et",
            name: "Ethiopia"
        },
        {
            code: "+679",
            country: "fj",
            name: "Fiji"
        },
        {
            code: "+358",
            country: "fi",
            name: "Finland"
        },
        {
            code: "+33",
            country: "fr",
            name: "France"
        },
        {
            code: "+241",
            country: "ga",
            name: "Gabon"
        },
        {
            code: "+220",
            country: "gm",
            name: "Gambia"
        },
        {
            code: "+995",
            country: "ge",
            name: "Georgia"
        },
        {
            code: "+49",
            country: "de",
            name: "Germany"
        },
        {
            code: "+233",
            country: "gh",
            name: "Ghana"
        },
        {
            code: "+350",
            country: "gi",
            name: "Gibraltar"
        },
        {
            code: "+30",
            country: "gr",
            name: "Greece"
        },
        {
            code: "+299",
            country: "gl",
            name: "Greenland"
        },
        {
            code: "+1",
            country: "gd",
            name: "Grenada"
        },
        {
            code: "+1",
            country: "gu",
            name: "Guam"
        },
        {
            code: "+502",
            country: "gt",
            name: "Guatemala"
        },
        {
            code: "+44",
            country: "gg",
            name: "Guernsey"
        },
        {
            code: "+224",
            country: "gn",
            name: "Guinea"
        },
        {
            code: "+245",
            country: "gw",
            name: "Guinea-Bissau"
        },
        {
            code: "+592",
            country: "gy",
            name: "Guyana"
        },
        {
            code: "+509",
            country: "ht",
            name: "Haiti"
        },
        {
            code: "+504",
            country: "hn",
            name: "Honduras"
        },
        {
            code: "+852",
            country: "hk",
            name: "Hong Kong"
        },
        {
            code: "+36",
            country: "hu",
            name: "Hungary"
        },
        {
            code: "+354",
            country: "is",
            name: "Iceland"
        },
        {
            code: "+91",
            country: "in",
            name: "India"
        },
        {
            code: "+62",
            country: "id",
            name: "Indonesia"
        },
        {
            code: "+98",
            country: "ir",
            name: "Iran"
        },
        {
            code: "+964",
            country: "iq",
            name: "Iraq"
        },
        {
            code: "+353",
            country: "ie",
            name: "Ireland"
        },
        {
            code: "+44",
            country: "im",
            name: "Isle of Man"
        },
        {
            code: "+972",
            country: "il",
            name: "Israel"
        },
        {
            code: "+39",
            country: "it",
            name: "Italy"
        },
        {
            code: "+1",
            country: "jm",
            name: "Jamaica"
        },
        {
            code: "+81",
            country: "jp",
            name: "Japan"
        },
        {
            code: "+44",
            country: "je",
            name: "Jersey"
        },
        {
            code: "+962",
            country: "jo",
            name: "Jordan"
        },
        {
            code: "+7",
            country: "kz",
            name: "Kazakhstan"
        },
        {
            code: "+254",
            country: "ke",
            name: "Kenya"
        },
        {
            code: "+686",
            country: "ki",
            name: "Kiribati"
        },
        {
            code: "+383",
            country: "xk",
            name: "Kosovo"
        },
        {
            code: "+965",
            country: "kw",
            name: "Kuwait"
        },
        {
            code: "+996",
            country: "kg",
            name: "Kyrgyzstan"
        },
        {
            code: "+856",
            country: "la",
            name: "Laos"
        },
        {
            code: "+371",
            country: "lv",
            name: "Latvia"
        },
        {
            code: "+961",
            country: "lb",
            name: "Lebanon"
        },
        {
            code: "+266",
            country: "ls",
            name: "Lesotho"
        },
        {
            code: "+231",
            country: "lr",
            name: "Liberia"
        },
        {
            code: "+218",
            country: "ly",
            name: "Libya"
        },
        {
            code: "+423",
            country: "li",
            name: "Liechtenstein"
        },
        {
            code: "+370",
            country: "lt",
            name: "Lithuania"
        },
        {
            code: "+352",
            country: "lu",
            name: "Luxembourg"
        },
        {
            code: "+853",
            country: "mo",
            name: "Macao"
        },
        {
            code: "+261",
            country: "mg",
            name: "Madagascar"
        },
        {
            code: "+265",
            country: "mw",
            name: "Malawi"
        },
        {
            code: "+60",
            country: "my",
            name: "Malaysia"
        },
        {
            code: "+960",
            country: "mv",
            name: "Maldives"
        },
        {
            code: "+223",
            country: "ml",
            name: "Mali"
        },
        {
            code: "+356",
            country: "mt",
            name: "Malta"
        },
        {
            code: "+692",
            country: "mh",
            name: "Marshall Islands"
        },
        {
            code: "+222",
            country: "mr",
            name: "Mauritania"
        },
        {
            code: "+230",
            country: "mu",
            name: "Mauritius"
        },
        {
            code: "+52",
            country: "mx",
            name: "Mexico"
        },
        {
            code: "+691",
            country: "fm",
            name: "Micronesia"
        },
        {
            code: "+373",
            country: "md",
            name: "Moldova"
        },
        {
            code: "+377",
            country: "mc",
            name: "Monaco"
        },
        {
            code: "+976",
            country: "mn",
            name: "Mongolia"
        },
        {
            code: "+382",
            country: "me",
            name: "Montenegro"
        },
        {
            code: "+1",
            country: "ms",
            name: "Montserrat"
        },
        {
            code: "+212",
            country: "ma",
            name: "Morocco"
        },
        {
            code: "+258",
            country: "mz",
            name: "Mozambique"
        },
        {
            code: "+95",
            country: "mm",
            name: "Myanmar"
        },
        {
            code: "+264",
            country: "na",
            name: "Namibia"
        },
        {
            code: "+674",
            country: "nr",
            name: "Nauru"
        },
        {
            code: "+977",
            country: "np",
            name: "Nepal"
        },
        {
            code: "+31",
            country: "nl",
            name: "Netherlands"
        },
        {
            code: "+687",
            country: "nc",
            name: "New Caledonia"
        },
        {
            code: "+64",
            country: "nz",
            name: "New Zealand"
        },
        {
            code: "+505",
            country: "ni",
            name: "Nicaragua"
        },
        {
            code: "+227",
            country: "ne",
            name: "Niger"
        },
        {
            code: "+234",
            country: "ng",
            name: "Nigeria"
        },
        {
            code: "+683",
            country: "nu",
            name: "Niue"
        },
        {
            code: "+850",
            country: "kp",
            name: "North Korea"
        },
        {
            code: "+389",
            country: "mk",
            name: "North Macedonia"
        },
        {
            code: "+47",
            country: "no",
            name: "Norway"
        },
        {
            code: "+968",
            country: "om",
            name: "Oman"
        },
        {
            code: "+92",
            country: "pk",
            name: "Pakistan"
        },
        {
            code: "+680",
            country: "pw",
            name: "Palau"
        },
        {
            code: "+970",
            country: "ps",
            name: "Palestine"
        },
        {
            code: "+507",
            country: "pa",
            name: "Panama"
        },
        {
            code: "+675",
            country: "pg",
            name: "Papua New Guinea"
        },
        {
            code: "+595",
            country: "py",
            name: "Paraguay"
        },
        {
            code: "+51",
            country: "pe",
            name: "Peru"
        },
        {
            code: "+63",
            country: "ph",
            name: "Philippines"
        },
        {
            code: "+48",
            country: "pl",
            name: "Poland"
        },
        {
            code: "+351",
            country: "pt",
            name: "Portugal"
        },
        {
            code: "+1",
            country: "pr",
            name: "Puerto Rico"
        },
        {
            code: "+974",
            country: "qa",
            name: "Qatar"
        },
        {
            code: "+242",
            country: "cg",
            name: "Republic of the Congo"
        },
        {
            code: "+40",
            country: "ro",
            name: "Romania"
        },
        {
            code: "+7",
            country: "ru",
            name: "Russia"
        },
        {
            code: "+250",
            country: "rw",
            name: "Rwanda"
        },
        {
            code: "+1",
            country: "kn",
            name: "Saint Kitts and Nevis"
        },
        {
            code: "+1",
            country: "lc",
            name: "Saint Lucia"
        },
        {
            code: "+1",
            country: "vc",
            name: "Saint Vincent and the Grenadines"
        },
        {
            code: "+685",
            country: "ws",
            name: "Samoa"
        },
        {
            code: "+378",
            country: "sm",
            name: "San Marino"
        },
        {
            code: "+239",
            country: "st",
            name: "São Tomé and Príncipe"
        },
        {
            code: "+966",
            country: "sa",
            name: "Saudi Arabia"
        },
        {
            code: "+221",
            country: "sn",
            name: "Senegal"
        },
        {
            code: "+381",
            country: "rs",
            name: "Serbia"
        },
        {
            code: "+248",
            country: "sc",
            name: "Seychelles"
        },
        {
            code: "+232",
            country: "sl",
            name: "Sierra Leone"
        },
        {
            code: "+65",
            country: "sg",
            name: "Singapore"
        },
        {
            code: "+421",
            country: "sk",
            name: "Slovakia"
        },
        {
            code: "+386",
            country: "si",
            name: "Slovenia"
        },
        {
            code: "+677",
            country: "sb",
            name: "Solomon Islands"
        },
        {
            code: "+252",
            country: "so",
            name: "Somalia"
        },
        {
            code: "+27",
            country: "za",
            name: "South Africa"
        },
        {
            code: "+82",
            country: "kr",
            name: "South Korea"
        },
        {
            code: "+211",
            country: "ss",
            name: "South Sudan"
        },
        {
            code: "+34",
            country: "es",
            name: "Spain"
        },
        {
            code: "+94",
            country: "lk",
            name: "Sri Lanka"
        },
        {
            code: "+249",
            country: "sd",
            name: "Sudan"
        },
        {
            code: "+597",
            country: "sr",
            name: "Suriname"
        },
        {
            code: "+46",
            country: "se",
            name: "Sweden"
        },
        {
            code: "+41",
            country: "ch",
            name: "Switzerland"
        },
        {
            code: "+963",
            country: "sy",
            name: "Syria"
        },
        {
            code: "+886",
            country: "tw",
            name: "Taiwan"
        },
        {
            code: "+992",
            country: "tj",
            name: "Tajikistan"
        },
        {
            code: "+255",
            country: "tz",
            name: "Tanzania"
        },
        {
            code: "+66",
            country: "th",
            name: "Thailand"
        },
        {
            code: "+670",
            country: "tl",
            name: "Timor-Leste"
        },
        {
            code: "+228",
            country: "tg",
            name: "Togo"
        },
        {
            code: "+690",
            country: "tk",
            name: "Tokelau"
        },
        {
            code: "+676",
            country: "to",
            name: "Tonga"
        },
        {
            code: "+1",
            country: "tt",
            name: "Trinidad and Tobago"
        },
        {
            code: "+216",
            country: "tn",
            name: "Tunisia"
        },
        {
            code: "+90",
            country: "tr",
            name: "Turkey"
        },
        {
            code: "+993",
            country: "tm",
            name: "Turkmenistan"
        },
        {
            code: "+1",
            country: "tc",
            name: "Turks and Caicos Islands"
        },
        {
            code: "+688",
            country: "tv",
            name: "Tuvalu"
        },
        {
            code: "+256",
            country: "ug",
            name: "Uganda"
        },
        {
            code: "+380",
            country: "ua",
            name: "Ukraine"
        },
        {
            code: "+971",
            country: "ae",
            name: "United Arab Emirates"
        },
        {
            code: "+44",
            country: "gb",
            name: "United Kingdom"
        },
        {
            code: "+1",
            country: "us",
            name: "United States"
        },
        {
            code: "+598",
            country: "uy",
            name: "Uruguay"
        },
        {
            code: "+998",
            country: "uz",
            name: "Uzbekistan"
        },
        {
            code: "+678",
            country: "vu",
            name: "Vanuatu"
        },
        {
            code: "+39",
            country: "va",
            name: "Vatican City"
        },
        {
            code: "+58",
            country: "ve",
            name: "Venezuela"
        },
        {
            code: "+84",
            country: "vn",
            name: "Vietnam"
        },
        {
            code: "+1",
            country: "vi",
            name: "Virgin Islands"
        },
        {
            code: "+681",
            country: "wf",
            name: "Wallis and Futuna"
        },
        {
            code: "+212",
            country: "eh",
            name: "Western Sahara"
        },
        {
            code: "+967",
            country: "ye",
            name: "Yemen"
        },
        {
            code: "+260",
            country: "zm",
            name: "Zambia"
        },
        {
            code: "+263",
            country: "zw",
            name: "Zimbabwe"
        }
    ];

    // Toggle country dropdown function
    function toggleCountryDropdown() {
        const dropdown = document.getElementById('countryDropdown');
        const selectedCountry = document.querySelector('.selected-country');

        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
            selectedCountry.classList.remove('active');
        } else {
            dropdown.classList.add('show');
            selectedCountry.classList.add('active');

            // Initialize countries if not loaded yet
            if (!countryLoader || !countryLoader.isLoaded) {
                countryLoader = new CountryLoader();
                const container = document.getElementById('countryList');
                countryLoader.loadCountries(container);
            }
        }
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('countryDropdown');
        const selectedCountry = document.querySelector('.selected-country');
        const countrySelector = document.querySelector('.country-selector');

        if (dropdown && selectedCountry && countrySelector) {
            if (!countrySelector.contains(event.target)) {
                dropdown.classList.remove('show');
                selectedCountry.classList.remove('active');
            }
        }
    });

    // Performance optimized country loader
    class CountryLoader {
        constructor() {
            this.visibleCountries = [];
            this.filteredCountries = COUNTRIES_DATA;
            this.isLoaded = false;
            this.searchTerm = '';
            this.itemHeight = 50; // Approximate height of each item
            this.visibleCount = 10; // Number of items to show initially
            this.loadedCount = 0;
        }

        async loadCountries(container, searchTerm = '') {
            this.searchTerm = searchTerm.toLowerCase();
            this.filteredCountries = COUNTRIES_DATA.filter(country =>
                country.name.toLowerCase().includes(this.searchTerm) ||
                country.code.includes(this.searchTerm)
            );

            // Clear container
            container.innerHTML = '';

            if (this.filteredCountries.length === 0) {
                container.innerHTML = '<div class="no-results">No countries found</div>';
                return;
            }

            // Reset loaded count for new search
            this.loadedCount = 0;

            // Load initial batch
            this.loadNextBatch(container);

            // Set up scroll loading if not already set up
            if (!this.isLoaded) {
                this.setupScrollLoading(container);
                this.isLoaded = true;
            }
        }

        loadNextBatch(container) {
            const batch = this.filteredCountries.slice(this.loadedCount, this.loadedCount + this.visibleCount);

            batch.forEach(country => {
                const option = this.createCountryElement(country);
                container.appendChild(option);
            });

            this.loadedCount += batch.length;

            // Update or add pagination indicator
            this.updatePaginationIndicator(container);
        }

        updatePaginationIndicator(container) {
            // Remove existing pagination indicator
            const existingIndicator = container.querySelector('.pagination-indicator');
            if (existingIndicator) {
                existingIndicator.remove();
            }

            // Add pagination indicator showing current status
            // const indicator = document.createElement('div');
            // indicator.className = 'pagination-indicator';

            // if (this.loadedCount < this.filteredCountries.length) {
            //     indicator.innerHTML = `
            //         <div class="pagination-text">
            //             Showing ${this.loadedCount} of ${this.filteredCountries.length} countries
            //         </div>
            //         <div class="pagination-scroll-text">
            //             Scroll down for more...
            //         </div>
            //     `;
            // } else {
            //     indicator.innerHTML = `
            //         <div class="pagination-text">
            //             Showing all ${this.filteredCountries.length} countries
            //         </div>
            //     `;
            // }

            // container.appendChild(indicator);
        }

        createCountryElement(country) {
            const div = document.createElement('div');
            div.className = 'country-option';
            div.setAttribute('data-code', country.code);
            div.setAttribute('data-country', country.country);
            div.setAttribute('data-name', country.name);

            div.innerHTML = `
            <img src="https://flagcdn.com/24x18/${country.country}.png" alt="${country.name}" class="flag-icon" loading="lazy">
            <span class="country-name">${country.name}</span>
            <span class="country-code">${country.code}</span>
        `;

            // Add click handler
            div.addEventListener('click', (e) => {
                this.selectCountry(country);
            });

            return div;
        }

        selectCountry(country) {
            const selectedCountryElement = document.querySelector('.selected-country');
            const selectedFlagIcon = selectedCountryElement.querySelector('.flag-icon');
            const selectedCountryCode = selectedCountryElement.querySelector('.country-code');
            const hiddenCountryCodeInput = document.getElementById('selectedCountryCode');

            // Update selected country display
            selectedFlagIcon.src = `https://flagcdn.com/24x18/${country.country}.png`;
            selectedFlagIcon.alt = country.name;
            selectedCountryCode.textContent = country.code;

            // Update hidden input value
            hiddenCountryCodeInput.value = country.code;

            // Update selected state
            document.querySelectorAll('.country-option').forEach(opt => opt.classList.remove('selected'));
            event.currentTarget.classList.add('selected');

            // Close dropdown
            const dropdown = document.getElementById('countryDropdown');
            const selectedCountry = document.querySelector('.selected-country');
            dropdown.classList.remove('show');
            selectedCountry.classList.remove('active');
        }

        setupScrollLoading(container) {
            let isLoading = false;

            container.addEventListener('scroll', () => {
                if (isLoading || this.loadedCount >= this.filteredCountries.length) return;

                const {
                    scrollTop,
                    scrollHeight,
                    clientHeight
                } = container;

                // Load more when user scrolls near the bottom (within 50px)
                if (scrollTop + clientHeight >= scrollHeight - 50) {
                    isLoading = true;

                    setTimeout(() => {
                        this.loadNextBatch(container);
                        isLoading = false;
                    }, 100); // Small delay to prevent rapid firing
                }
            });

            // Enable smooth scrolling
            container.style.scrollBehavior = 'smooth';
        }
    }

    // Initialize the optimized country loader
    let countryLoader;

    document.addEventListener('DOMContentLoaded', function() {
        countryLoader = new CountryLoader();

        // Setup search functionality
        const searchInput = document.getElementById('countrySearch');
        let searchTimeout;

        searchInput.addEventListener('input', (e) => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const container = document.getElementById('countryList');
                countryLoader.loadCountries(container, e.target.value);
            }, 200); // Debounce search
        });
    });
</script>