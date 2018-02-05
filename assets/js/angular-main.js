
var app = angular.module("dlgtpl", ["ngRoute"]);
const base_url =  window.location.hostname  === 'localhost' ? 'http://localhost/dlgtpl/': 'http://pd.workwithchelseamarie.com/';
app.run(function ($rootScope, $location, $anchorScroll, $routeParams) {
    $rootScope.menu = [
        { 'name': 'Home', 'href': base_url },
        {
            'name': 'Television',
            children: [
                {
                    'name': 'CABLE TV', 'href': base_url+'television/cable-tv'
                },

                {
                    'name': 'DL GTPL Channels', 'href': base_url+'television/dlgtpl-channels'
                },
                {
                    'name': 'Packages', 'href': base_url+'television/packages'
                },
                {
                    'name': 'FAQs', 'href': base_url+'television/faqs'
                },
            ]
        },
        {
            'name': 'BROADBAND',  children: [
                {
                    'name': 'View Plan', 'href': base_url+'broadband/plans'
                },
                {
                    'name': 'Current Offer', 'href': base_url+'broadband/offer'
                }
            ]
        },
        {
            'name': 'Know Us', children: [
                {
                    'name': 'About-Us', 'href': base_url+'about-us'
                },
                {
                    'name': 'Board of Directors', 'href': base_url+'board-of-directors'
                },
                { 'name': 'Partners', 'href': base_url+'partners' },
            ]
        },
        {
            'name': 'Support', children: [
                {
                    'name': 'Register Query', 'href': base_url+'support/register-query'
                },
                {
                    'name': 'Grievance Redressal', 'href': base_url+'support/grievance-redressal'
                }
            ]
        },
        { 'name': 'Careers', 'href': base_url+'careers' },
        { 'name': 'Contact Us', 'href': base_url+'contact-us' },

    ]
    $rootScope.openModal = openModal;
    ///////
    function openModal(id) {
        $('#' + id).modal('show');
    }
});
app.controller('HomeController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'home';
});
app.controller('CareersController', function ($scope, $http) {
    var vm = this;
    //data
    vm.careers = [
        {
            position: 'Technician',
            openingLine: 'We are looking for MALE / FEMALE candidate who have good experience in PHP development. An ideal candidate will possess following.',
            requirements: [
                '6 months to 2+ years of experience developing in internet technologies using PHP.',
                'Experience in various PHP frameworks like CodeIgniter, Laravel, and WordPress',
                'Analysis, designing, developing and testing solutions based on brief.',
                'Develop code in PHP, JS, Jquery, HTML and CSS, AJAX, JSON/XML, web-services, MySQL.'
            ],
            responsibilities: [
                'Making disciplined use of source control and bug tracking systems. ',
                'Unit-testing code for robustness, including edge cases, usability and general reliability.'
            ]
        }
    ]
});
app.controller('GRController', function ($scope, $http) {
    var vm = this;


    //methods
    vm.openPopUp = openPopUp;
    vm.openInquiryDialog = openInquiryDialog;


    //////////
    function openPopUp(type) {
        vm.type = type;
        if (type === 'setTopBox') {
            vm.troubleShootTitle = 'Trouble Shooting Set Top Box';
            vm.accordionList = [
                {
                    que: 'The Set Top Box is unable to receive a signal',
                    ans: [
                        {
                            reason: 'Cable unplugged with set top box',
                            solution: 'Refresh set top box'
                        },
                        {
                            reason: 'Cable cut down OR Junction problem / electrical problem',
                            solution: 'Check cable connection'
                        },
                    ]
                },
                {
                    que: 'Pls insert your Smartcard.do not remove the card it is unless told to do so',
                    ans: [
                        {
                            reason: 'Smartcard not inserted properly',
                            solution: 'Remove card & reinsert it or Card shall be up side downward OR Press card for proper adjustment'
                        }
                    ]
                },
                {
                    que: 'Set top box does not blink red or green',
                    ans: [
                        {
                            reason: 'Cable unplugged with set top box',
                            solution: 'Refresh set top box'
                        },
                        {
                            reason: 'Cable cut down OR Junction problem / electrical problem',
                            solution: 'Check cable connection'
                        }
                    ]
                },

            ];
        } else {
            vm.troubleShootTitle = 'Trouble Shooting Broadband';

            vm.accordionList = [
                {
                    que: 'ERROR 678 / 651 / 815 : "The remote computer did not respond”',
                    ans: [
                        'LAN card of PC may be disabled- enable LAN card and check',
                        'PC Ethernet (LAN card) port fault/ Driver corrupt. Repair/Install new driver',
                        'Line problem between your end and DP / POP of Internet Service Provider (ISP). i.e. –cable , switch / media convertor (device faulty)- check line',
                        'Spy ware is running on the computer and is interfering with the connection-Run antivirus and remove spywares',
                        'Third-party firewall software is blocking the connection-check whether soft firewall',
                        'Server down or due to higher network element faults at ISP-Contact with Customer Care Team.',
                        'Error 651 is faced in windows 7 – error 851 is faced in windows vista-above',
                        'Error 815 may also occur due to restricted user (or we can say logged in with USERS other then administrator of the system)',
                        'Error 815 may also occur due windows registry corruption.'
                    ]
                },
                {
                    que: 'ERROR 769: “The specified destination is not reachable”',
                    ans: [
                        'Error - Due to LAN port disabled or Lan card drivers not installed or lan card drivers not properly installed.',
                        'Solution- Enable the LAN port (or Local Area Connection). Or Installed the lan card drivers.'
                    ]
                },
                {
                    que: 'ERROR 691: “Access was denied because the user name and/or password was invalid on the domain”  OR Error 691: Access was denied because the user name and/or password was invalid on the domain.',
                    ans: [
                        'Incorrect User name or password, or Spelling error.',
                        'Due to forget of changed password.',
                        'Due to authentication problem in AAA server of ISP.',
                        'Error 691 due to wrong password',
                        'Error 629 in windows 7 due to MAC address authorization failure.'
                    ]
                },
                {
                    que: 'Error 734: The PPP link control protocol was terminated. -or- Error 629: The port was disconnected by the remote machine.',
                    ans: [
                        'Incorrect User name or password, or Spelling error.',
                        'Due to forget of changed password.',
                        'Due to authentication problem in AAA server of ISP.',
                        'Error 691 due to wrong password',
                        'Error 629 in windows 7 due to MAC address authorization failure.'
                    ]
                },
                {
                    que: 'Initializing…..',
                    ans: [
                        {
                            reason: 'First time set top box operation',
                            solution: 'Refresh set top box'
                        }
                    ]
                },
                {
                    que: 'ERROR: 619- “The remote computer did not respond and port was closed”',
                    ans: [
                        'Due Registry Problem use scanreg command to repair dialer',
                        'Due to corrupted Lan USB driver (If using). When USB to lan convertor NIC card is used.Install new dialer',

                    ]
                },
                {
                    que: 'Error 720: No PPP Control Protocols Configured',
                    ans: [
                        'TCP/IP may be corrupt, try re-installing TCP/IP',
                        'DHCP hand shake issue or ip release to client issue.'
                    ]
                },
                {
                    que: 'Error 729: No PPP Control Protocols Configured',
                    ans: [
                        'Due to the mismatch pppoe service installed – Remove all the pppoe service',
                    ]
                },
                {
                    que: 'Dialer Connected Page Not Open',
                    ans: [
                        'Due to the browser issue-check on another browser',
                        'Due to the DNS failure issue-contact with customer care team whether specified DNS is working or not or check with the system whether it has obtained DNS or not.'
                    ]
                },
                {
                    que: 'Speed Slow',
                    ans: [
                        'viruses/spyware issue- check with the system whether antivirus is installed',
                        'Line connectivity issue- check with customer care team where issue is in line',
                        'IBW issue-check with customer care team whether IBW constraint is there',
                        'Subcriber plan-check with customer care team proper plan has been alloted.'
                    ]
                },
                {
                    que: 'Outlook issue/SMTP port Issue',
                    ans: [
                        'check whether customer has subscribed static IP or not as by the default GTPL block SMTP port.',
                        'Check proper configuration of outlook in case of static IP'
                    ]
                },
                {
                    que: 'Particular file is not being uploaded',
                    ans: [
                        'Switch/Media Issue'
                    ]
                },
            ];
        }

        $('#accordion-dialog').modal('show');
    }
    function openInquiryDialog(type) {
        vm.inquiryForm = {
            type: type === 'sd' ? 'Standard Definition' : 'High Defition'
        }
        $('#inquiry-dialog').modal('show');

        if (type === 'sd') {
            vm.inquryFormTitle = 'Inquiry For Standard Definition';
        } else {
            vm.inquryFormTitle = 'Inquiry For High Definition';
        }
    }
});
app.controller('RegisterQueryController', function ($scope, $http) {

});
app.controller('PackagesController', function ($scope, $http) {
    var vm = this;
    vm.packages = [
        {
            'name': 'FTA PACK',
            'price': 120,
            'channels': '119  Channels',
            'class': 'content-info',
            'center': false
        },
        {
            'name': 'SILVER PACK',
            'price': 270,
            'channels': '271  Channels',
            'class': 'content-success',
            'center': false
        },
        {
            'name': 'GOLD PACK',
            'price': 320,
            'channels': '313  Channels',
            'class': 'content-warning',
            'center': false
        },
        {
            'name': 'HD SILVER PACK',
            'price': 350,
            'channels': '297  Channels',
            'class': 'content-rose',
            'center': false
        },
        {
            'name': 'HD GOLD PACK',
            'price': 440,
            'channels': '372  Channels',
            'class': 'content-danger',
            'center': true
        }
    ]

    //methods
    vm.openPopUp = openPopUp;


    //////
    function openPopUp(packageName) {
        console.log(packageName);
        vm.currentPackageName = packageName;
        if (packageName === 'FTA PACK') {
            packageName = 'fta';
        } else if (packageName === 'SILVER PACK') {
            packageName = 'silver';
        } else if (packageName === 'GOLD PACK') {
            packageName = 'gold';
        } else if (packageName === 'HD SILVER PACK') {
            packageName = 'hd-silver';
        } else if (packageName === 'HD GOLD PACK') {
            packageName = 'hd-gold';
        }
        vm.currentChannels = [
            {
                name: 'hindi-gec',
                channels: []
            },
            {
                name: 'eng.-gec',
                channels: []
            },
            {
                name: 'hindi-movies',
                channels: []
            },
            {
                name: 'eng.-movies',
                channels: []
            },
            {
                name: 'sports',
                channels: []
            },
            {
                name: 'gujarati-news',
                channels: []
            },
            {
                name: 'hindi-news',
                channels: []
            },
            {
                name: 'english-news',
                channels: []
            },
            {
                name: 'english-business-news',
                channels: []
            },
            {
                name: 'hindi-business-news',
                channels: []
            },
            {
                name: 'gujarati-business',
                channels: []
            },
            {
                name: 'global-news',
                channels: []
            },
            {
                name: 'hindi-music',
                channels: []
            },
            {
                name: 'english-music',
                channels: []
            },
            {
                name: 'cartoon',
                channels: []
            },
            {
                name: 'devotional',
                channels: []
            },
            {
                name: 'science',
                channels: []
            },
            {
                name: 'gujarati',
                channels: []
            },
            {
                name: 'rajashthan',
                channels: []
            },
            {
                name: 'marathi',
                channels: []
            },
            {
                name: 'telugu',
                channels: []
            },
            {
                name: 'tamil',
                channels: []
            },
            {
                name: 'malayalam',
                channels: []
            },
            {
                name: 'kanada',
                channels: []
            },
            {
                name: 'bangla',
                channels: []
            },
            {
                name: 'oriya',
                channels: []
            },
            {
                name: 'punjabi',
                channels: []
            },
            {
                name: 'bhojpuri',
                channels: []
            },
            {
                name: 'urdu',
                channels: []
            },
            {
                name: 'leisure-&-hobbies',
                channels: []
            },
            {
                name: 'radio',
                channels: []
            },
            {
                name: 'business-news',
                channels: []
            },
        ];
        angular.forEach(vm.channels, function (channel) {
            console.log(channel[packageName])
            if (channel.category && channel.category !== null && channel[packageName] === true) {
                for (var i = 0; i < vm.currentChannels.length; i++) {
                    var category = vm.currentChannels[i];
                    if (category.name === channel.category.toLowerCase().split(' ').join('-')) {
                        vm.currentChannels[i]['channels'].push(channel);
                        break;
                    }
                }
            }
        });
        console.log(vm.currentChannels);
        $('#myModal').modal('show');
    }
    vm.stepperFormSubmit = stepperFormSubmit;

    function stepperFormSubmit(index, packageName) {
        console.log(index, packageName);
    }
    (function () {
        var url = base_url+'assets/data/channels.json'
        $http({
            method: 'GET',
            url: url
        }).then(function (res) {
            vm.channels = res.data;
        });
        vm.channels
    })();
});
app.controller('DLGTPLChannelsController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'dlgtpl-channels';
    var vm = this;

    vm.channels = [
        {
            img: 'dl-cinema.jpg',
            name: 'DL CINEMA',
            no: 74,
            desc: 'This is the most popular Bollywood Movie Channel which entertains the movie buffs with the a range of Hindi Flicks.'
        },
        {
            img: 'dl-classic.jpg',
            name: 'DL CLASSIC',
            no: 75,
            desc: 'This is the most popular old and mid hindi movies channel.'
        },
        {
            img: 'dl-hollywood.jpg',
            name: 'DL HOLLYWOOD',
            no: 91,
            desc: 'This is the most popular English movies channel.'
        },
        {
            img: 'dl-music.jpg',
            name: 'DL MUSIC',
            no: 75,
            desc: 'This is an On Demand Music Channel that features a mix of Hollywood, Bollywood Songs.'
        },
        {
            img: 'dl-bhakti.jpg',
            name: 'DL BHAKTI',
            no: 551,
            desc: 'This is the Devotional Channel.'
        },
        {
            img: 'dl-gujarati.jpg',
            name: 'DL GUJARATI',
            no: 603,
            desc: 'This is the Gujarati Movies,Music, Lokdayro & Natak Channel.'
        },
        {
            img: 'dl-marathi.jpg',
            name: 'DL MARATHI',
            no: 625,
            desc: 'This is the Marathi Movies & Music Channel.'
        }, {
            img: 'hind-tv.jpg',
            name: 'HIND TV',
            no: 201,
            desc: 'This is the most popular Gujarati News Channel in South Gujarat.'
        }

    ];
    console.log(vm.channels);
});
app.controller('CustomerApplicationFormController', function () {
    $rootScope.bodyClass = 'compliance';
});
app.controller('BroadbandController', function ($scope, $timeout, $rootScope) {
    $rootScope.bodyClass = 'broadband';

    var vm = this;
    vm.cities = [
        {
            name: 'Surat City',
            value: 'surat_city',
            active: true
        },
        {
            name: 'Surat Rural',
            value: 'surat_rural'
        },
        {
            name: 'Bardoli',
            value: 'bardoli'
        },
        {
            name: 'Madhi',
            value: 'madhi'
        },
        {
            name: 'Vyara',
            value: 'vyara'
        }
    ]
    vm.plans = {
        'surat_city': [
            {
                'category': 'Unlimited Plans',
                'plans': [
                    { 'speed': '1 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 2750 },
                    { 'speed': '2 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 3750 },
                    { 'speed': '3 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 4750 },
                    { 'speed': '5 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 6500 },
                    { 'speed': '7 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 8260 },
                    { 'speed': '10 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 9270 },
                    { 'speed': '13 Mbps', 'validity': '8 Months Free + 12 Months', 'price': 10296 }
                ]
            },
            {
                'category': 'Day/Night Unlimited Plans',
                'plans': [
                    { 'speed': '1 Mbps - 3 Mbps', 'validity': '12 Months Free + 12 Months', 'price': 5100 },
                    { 'speed': '1 Mbps - 4 Mbps', 'validity': '12 Months Free + 12 Months', 'price': 6100 },
                    { 'speed': '2 Mbps - 6 Mbps', 'validity': '12 Months Free + 12 Months', 'price': 7200 },
                ]
            },
            {
                'category': 'Home Limited Plans',
                'plans': [
                    { 'speed': '10 Mbps / DATA 1000 GB', 'validity': '6 Months free + 12 Months', 'price': 4999 },
                    { 'speed': '15 Mbps / DATA 1100 GB', 'validity': '2100 GB free + 12 Months', 'price': 6900 },
                ]
            },
            {
                'category': 'FUP Unlimited Plans',
                'plans': [
                    { 'speed': '15 Mbps / 512 kbps ul', 'validity': '2 GB Daily CAP + 12 Months', 'price': 4700 },
                    { 'speed': '15 Mbps / 512 kbps ul', 'validity': '4 GB Daily CAP + 12 Months', 'price': 5700 },
                    { 'speed': '15 Mbps / 2 Mbps ul', 'validity': '5 GB Daily CAP + 12 Months', 'price': 7700 },
                ]
            }
        ],
        'surat_rural': [
            {
                'category': 'Unlimited Plans',
                'plans': [
                    { 'speed': '1 Mbps', 'month_variation': [{ 'validity': '12 months', 'price': 6000 }, { 'validity': '6 months', 'price': 2999 }, { 'validity': '3 months', 'price': 'N.A' }] },
                    { 'speed': '2 Mbps', 'month_variation': [{ 'validity': '12 months', 'price': 6999 }, { 'validity': '6 months', 'price': 3800 }, { 'validity': '3 months', 'price': 2500 }] },
                    { 'speed': '3 Mbps', 'month_variation': [{ 'validity': '12 months', 'price': 11500 }, { 'validity': '6 months', 'price': 6199 }, { 'validity': '3 months', 'price': 3500 }] },
                    { 'speed': '5 Mbps', 'month_variation': [{ 'validity': '12 months', 'price': 13999 }, { 'validity': '6 months', 'price': 7500 }, { 'validity': '3 months', 'price': 3999 }] },
                ]
            },
            {
                'category': 'Day/Night Unlimited Plans',
                'plans': [
                    { 'speed': '600 kbps Day - 2 mbps Night', 'month_variation': [{ 'validity': '12 months', 'price': 4999 }, { 'validity': '6 months', 'price': 2699 }, { 'validity': '3 months', 'price': 'N.A' }] },
                    { 'speed': '1 mbps Day - 3 mbps Night', 'month_variation': [{ 'validity': '12 months', 'price': 10000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 2500 }] },
                    { 'speed': '2 mbps Day - 6 mbps Night', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                ]
            },
            {
                'category': 'Home Limited Plans ',
                'plans': [
                    { 'speed': '10 Mbps', 'data_limit': '250 GB', 'month_variation': [{ 'validity': '12 months', 'price': 4999 }, { 'validity': '6 months', 'price': 2699 }, { 'validity': '3 months', 'price': 'N.A' }] },
                    { 'speed': '10 Mbps', 'data_limit': '350 GB', 'month_variation': [{ 'validity': '12 months', 'price': 10000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 2500 }] },
                    { 'speed': '10 Mbps', 'data_limit': '550 GB', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                    { 'speed': '10 Mbps', 'data_limit': '1100 GB', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                    { 'speed': '10 Mbps (1100 GB Free)', 'data_limit': '1100 GB', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                    { 'speed': '10 Mbps (1100 GB Free + 24 months Free)', 'data_limit': '1100 GB', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                    { 'speed': '6 Mbps (6 Months Free + 600 GB Free)', 'data_limit': '1100 GB', 'month_variation': [{ 'validity': '12 months', 'price': 12000 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 3500 }] },
                ]
            },
            {
                'category': 'CCTV PLAN',
                'plans': [
                    {
                        'speed': '1 Mbps DL - 3 Mbps UL', 'month_variation': [{ 'validity': '12 months', 'price': 12500 }, { 'validity': '6 months', 'price': 'N.A.' }, { 'validity': '3 months', 'price': 'N.A' }]
                    }
                ]
            },
            {
                'category': 'Special OFFER',
                'plans': [
                    {
                        'speed': '10 Mbps / 512 kbps UL', 'plans': [
                            {
                                'month_variation': [
                                    { 'data_limit': '25 GB', 'validity': '12 months', 'price': 'N.A.' }, { 'validity': '6 months', 'price': 3099 },
                                    { 'data_limit': '35 GB', 'validity': '12 months', 'price': 4999 }, { 'validity': '6 months', 'price': 'N.A.' },
                                    { 'data_limit': '50 GB', 'validity': '12 months', 'price': 5999 }, { 'validity': '6 months', 'price': 'N.A.' },
                                    { 'data_limit': '100 GB', 'validity': '12 months', 'price': 7499 }, { 'validity': '6 months', 'price': 'N.A.' }
                                ]
                            }
                        ]
                    }
                ]
            }
        ],
        'bardoli': [
            {
                'category': 'Unlimited Plans',
                'plans': [
                    { 'speed': '2 Mbps', 'month_variation': [{ 'validity': '12 months + 6 Months Free', 'price': 7000 }] },
                    { 'speed': '3 Mbps', 'month_variation': [{ 'validity': '12 months + 8 Months free', 'price': 11500 }, { 'validity': '6 months + 1 Month free', 'price': 6200 }] },
                    { 'speed': '5 Mbps', 'month_variation': [{ 'validity': '12 months + 8 Months free', 'price': 14000 }, { 'validity': '6 months + 1 Month free', 'price': 7500 }] },
                ]
            },
            {
                'category': 'Day/Night Unlimited Plans',
                'plans': [
                    { 'speed': '1 Mbps Day-3 Mbps Night', 'validity': '18 Months Free + 12 Months', 'price': 10000 },
                    { 'speed': '2 Mbps Day-6 Mbps Night', 'validity': '18 Months Free + 12 Months', 'price': 12000 },
                ]
            },
            {
                'category': 'Home Limited Plans',
                'plans': [
                    { 'speed': '10 Mbps', 'data_limit': '500 GB', 'validity': '100 GB Free + 12 Months', 'price': 8200 },
                    { 'speed': '10 Mbps', 'data_limit': '1100 GB', 'validity': '2200 GB Free + 12 Months', 'price': 10000 },
                    { 'speed': '10 Mbps', 'data_limit': '1100 GB', 'validity': '2200 GB + 24 Months Free + 12 Months', 'price': 15000 },
                    { 'speed': '6 Mbps', 'data_limit': '1000 GB', 'validity': '1000 GB Free + 12 Months', 'price': 6000 },
                ]
            },
        ]
    }
    vm.plan = vm.plans['surat_city'];
    $timeout(function () {
        ResCarouselSize();
        _jQueryForSlider();
    }, 100)
    //methods 
    vm.selectCategory = function (event, category) {
        angular.forEach(vm.cities, function (single, key) {
            vm.cities[key].active = single.value === category ? true : false;
        });
        if (category === 'vyara' || category === 'madhi') {
            category = 'bardoli';
        }
        vm.plan = vm.plans[category];
        $timeout(function () {
            ResCarouselSize();
            _jQueryForSlider();

        }, 100)
    }

    function _jQueryForSlider() {
        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });
    }
    vm.changMonth = function (plan, month) {
        angular.forEach(plan.month_variation, function (single, key) {
            if (angular.equals(month, single)) {
                plan.price = single.price;
                plan.month_variation[key].active = true;
            } else {
                plan.month_variation[key].active = false;
            }
        });
        return plan;
    }
});

app.controller('ComplianceController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'compliance';
});
app.controller('PrivacyPolicyController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'privacy-policy';
});
app.controller('TACController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'terms-and-conditions';
});

app.controller('AboutUsController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'about-us';
});
app.controller('BODController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'board-of-director';
    var vm = this;
    vm.boardOfDirectors = [
        {
            img: 'vipul.png',
            name: 'Mr. Vipulbhai Malaviya',
            desc: 'Mr. Vipulkumar Malaviya has donned the hat of Joint Managing Director with aplomb, taking the business to newer heights, having owned a cable network in the past. Mr. Malaviya joined DLGTPL, which is named after his father along with four other Directors. With a degree in Bachelor of Commerce, Mr. Malavia has proved to his detractors that it is the business acumen that counts the most in fourteen years of service combining it with a strong vision.'
        },
        {
            img: 'manish.png',
            name: 'Mr. Manish Savani',
            desc: 'Equipped with a Diploma in Textiles Manufacturing Technology, Mr. Manish Savani has established himself in the business circle having owned a Cable Network in the past. A resident of Gujarat, Mr. Savani has carved a name for himself in fifteen years of service. Powered with the role of Managing Director, Mr. Savani has taken the business to newer levels putting his experience of broadcast and distribution to good use, thereby sharpening the business model.'
        },
        {
            img: 'narendra.png',
            name: 'Mr. Narendrakumar Ribadiya',
            desc: 'Mr. Narendrakumar Ribadiya, Executive Director, has led the finance sector with an example. Mr. Ribadiya has been actively involved in the operations of Hind TV and other local channels. His hands on technical know-how and expertise in accounting make him an invaluable resource.'
        }, {
            img: 'lalitkumar.png',
            name: 'Mr. Lalitkumar Patel',
            desc: 'Armed with a degree in Bachelor of Commerce, Mr. Lalitkumar Patel has had a deep impact on businesses with sharp knowledge on initiating joint ventures. All of 51, coupled with 20 years of dedicated experience in textiles and the cable industry, Mr. Patel, now the Executive Director, has benefitted the business by leaps and bounds. Mr. Patel operates from Nandurbag covering Maharashtra and Gujarat also concentrating on Madhya Pradesh and Maharashtra to expand the cable business.'
        },
        {
            img: 'anirudh.png',
            name: 'Mr. Anirudhsinh Jadeja',
            desc: "Rising from a small city of Gujarat, Mr. Anirudh Sinh Jadeja, Non Executive Director of DLGTPL, has a robust and an extended experience in cable television networking business. Deep insights on various facets of the business and his visionary leadership are the corner stones for the meteoric rise of GTPL as India's leading and fastest growing Multi System Operator.Mr.Jadeja's strategic vision coupled with his collaborative work methodologies has been the key of GTPL's continued growth story."
        }, {
            img: 'amit.png',
            name: 'Mr. Amit Shah',
            desc: "Mr. Shah, Non Executive Director of DLGTPL has an extensive experience in distribution of popular Pay TV channels like Star TV, ESPN, Star Sports etc. His extensive support in shaping the organization and fostering it's growth is incredible. He has also attained the position of top performer & award Winner, year on year basis."
        },
        {
            img: 'kanak.png',
            name: 'Mr. Kanaksinh Rana',
            desc: "Mr. Rana, Non Executive Director of DLGTPL has been one of the founder members of the organization and his insightful networking skills have played a key role in shaping the organization and garnering around 70% market share in Gujarat. He is also actively involved in successful operations of Gujarat News and other local channels."
        },
        {
            img: 'parul.png',
            name: 'Mrs. Parul Jadeja',
            desc: "Mrs. Jadeja is the Non-Executive Director of the organization with more than 20 years of experience in Cable TV distribution. She is the visionary leader with strong acumen of people management, administration and business networking. An arts graduate and hotel management degree holder from Gujarat University, Mrs. Jadeja leads the show from the forefront."
        }
    ]
});
app.controller('PartnersController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'partners';
    var vm = this;
    vm.partners = [
        {
            name: 'GTPL',
            tagLine: 'DIGITAL CABLE TV | Broadband',
            img: 'assets/img/partners/gtpl-logo.jpg'
        },
        {
            name: 'CHANNEL MASTER PVT. LTD.',
            tagLine: 'Digital Headend IP Solution',
            img: 'assets/img/partners/channelmaster-logo.jpg'
        }, {
            name: 'SUMAVISION',
            tagLine: 'Sumavision Technologies Co., Ltd.',
            img: 'assets/img/partners/sumavision-logo.jpg'
        }, {
            name: 'SKYWORTH',
            tagLine: 'Hong Kong Skyworth Digital Holdings Co., Ltd.',
            img: 'assets/img/partners/skyworth-logo.jpg'
        }, {
            name: 'YINHE',
            tagLine: 'Jiangsu Yinhe Electronics Co., Ltd.',
            img: 'assets/img/partners/yinhe-logo.jpg'
        },
        {
            name: 'CABLE GUY',
            tagLine: 'Cable Guy subscriber management system',
            img: 'assets/img/partners/cable-guy.png'
        },
        {
            name: 'HARMONIX',
            tagLine: '',
            img: 'assets/img/partners/harmonix-logo.jpg'
        },
        {
            name: 'OPTILINK',
            tagLine: 'Optilink Network',
            img: 'assets/img/partners/potilink-logo.jpg'
        }
    ]
    $rootScope.bodyClass = 'about-us';
});
app.controller('ContactUsController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'contact-us';
    $().ready(function () {
        // the body of this function is in assets/material-kit.min.js
        materialKitDemo.initContactUsMap();
    });
});
app.controller('FAQController', function ($scope, $rootScope) {
    $rootScope.bodyClass = 'about-us';
    var vm = this;
    vm.faqs = [
        {
            que: 'IS DIGITAL CABLE AVAILABLE IN MY CITY?',
            ans: 'Refer to the software/channels section.DL GTPL being a cable network, has limitations of reach in each city and availability of network’s reach as well.'
        },
        {
            que: 'WILL NEW CABLING BE REQUIRED IN MY HOUSE TO INSTALL A STB?',
            ans: 'Digital cable will work on the same cable that is currently in your residence. The cable will now, not be connected directly to the TV but will get connected to the STB first. Audio Video cords will then be used to connect to your TV.'
        },
        {
            que: 'HOW MUCH WILL DIGITAL CABLE COST?',
            ans: 'If you are in the mandated CAS areas of South Mumbai and South Delhi, monthly service charges vary depending on the type of package you order from us. Go to the Packages section for details about the many options. If you reside in any area other than the mandated CAS regions you will continue paying the same rate that you are paying currently to receive up to 150-160 services. Additional services may also be optionally available at an additional cost.'
        },
        {
            que: 'DO I NEED TO BUY OR RENT NEW EQUIPMENT TO RECEIVE DIGITAL CABLE?',
            ans: 'You can rent a STB as per the standard terms laid down by TRAI in mandated areas and CAS. For all other areas different STBs are available @ very low and affordable rates from DL GTPL Office / LCO.'
        },
        {
            que: 'IF I HAVE ADDITIONAL TV.S WILL I NEED STB.S AT ALL LOCATIONS?',
            ans: 'Yes, One STB can be connected to one TV set only.'
        },
        {
            que: 'WHAT IS THE ELECTRONIC PROGRAMMING GUIDE?',
            ans: 'Electronic Program Guide, or EPG, will soon become one of your favorite features. With the touch of a button, you can find information about any program that\'s on today, tomorrow or even up to a week from now. The EPG features bright, clear graphics, easy-to-use menus and information at your fingertips. You can browse through the guide or other available programs without leaving the channel you\'re on. A Channel Banner displays a program synopsis, running time, channel number and also an option to reserve that programme that will come later. You can browse from the current channel banners to find out what\'s on other channels or at other times while still watching the same program. And, you can tune in to a new channel directly from the channel banner if you see something you\'d rather watch! In addition, the simple on-screen guide clicks on and off at the touch of a button, giving you detailed information, such as plot summaries, actors, about any program you choose - up to 3 days in advance. The guide allows you to search for programs by theme (sports, movies, drama, children\'s, etc.) or title. You can browse at your own speed and never have to wait!'
        },
        {
            que: 'HOW IS DIGITAL CABLE BETTER THAN OTHER SERVICES?',
            ans: 'Whilst almost all platforms will provide similar TV services, the differentiator is our capacity to be able to provide 2 way interactive services as also 1000+ services which can be a mix of TV channels in SD or HD, Video On Demand, Games and other interactive applications. The power of Digital Cable will be more noticed once the Govt..s planned phase out of analog cable commences.Our Digital Cable service offers you sharper, brighter digital pictures and clearer, stereophonic sound, dozens more channels and an advanced Electronic Programming Guide. In addition, we provide dependable, on-time, guaranteed customer service from our local area office or even through your neighbourhood cable operator.'
        },
        {
            que: 'DOES DL GTPL ALSO PROVIDE INTERNET SERVICES THROUGH TV?',
            ans: 'DL GTPL has not introduced Internet services through its Set Top Box. But we provide Internet services on the same cable TV infrastructure. Please refer to the ISP section on the website.'
        },
        {
            que: 'WHAT IS THE WARRANTY ON THE STB ?',
            ans: '12 months.'
        },
        {
            que: 'WHERE CAN I PURCHASE A NEW REMOTE CONTROL DEVICE?',
            ans: 'Additional remote control devices will be available at the local DL GTPL office or through your Local Cable Operator. Kindly refer to the Helpline nos. on your STB or refer to the Contacts section. We can provide a Universal Remote through which you can control your STB and TV from a single device.'
        },
        {
            que: 'I HAVE MISPLACED/LOST THE VIEWING CARD ? WHAT SHOULD I DO?',
            ans: 'Get in touch with your local DL GTPL office/Local cable operator and they will swap or replace the same. Charges of Rs.400/- + Service Tax will be levied for the same.'
        },
        {
            que: 'WHAT SHOULD I DO IF IS RELOCATE TO A NEW HOUSE?',
            ans: 'Get in touch with your local DL GTPL office/Local cable operator and inform them of your new location. They will revert on the feasibility and transfer the STB to your new location provided all dues are cleared. If the feasibility is negative, you will have to go in for a new service provider, whichever is available in that area. If the STB has been availed on rental basis, the refund will be processed upon surrendering the same.'
        }
    ]
});