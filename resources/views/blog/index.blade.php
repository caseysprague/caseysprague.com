@extends('layouts.app')

@section('body')
    <body>
        <div class="flex flex-col">
            {{-- <div class="border-b border-grey-light flex sm:flex-row flex-col justify-between items-center p-4 bg-white font-sans">
                <svg width="213px" height="36px" viewBox="0 0 213 36" xmlns="http://www.w3.org/2000/svg">
                    <g id="logo" transform="translate(-1.000000, -1.000000)">
                        <path d="M47.748,18.212 C47.748,16.9653271 47.9679978,15.8360051 48.408,14.824 C48.8480022,13.8119949 49.4493295,12.9466703 50.212,12.228 C50.9746705,11.5093297 51.8729948,10.9556686 52.907,10.567 C53.9410052,10.1783314 55.0446608,9.984 56.218,9.984 C57.4206727,9.984 58.557328,10.1783314 59.628,10.567 C60.698672,10.9556686 61.5933297,11.4799967 62.312,12.14 L59.1,16.012 C58.8066652,15.6306648 58.4400022,15.341001 58,15.143 C57.5599978,14.944999 57.0686694,14.846 56.526,14.846 C56.0859978,14.846 55.6753352,14.9229992 55.294,15.077 C54.9126648,15.2310008 54.5790014,15.4546652 54.293,15.748 C54.0069986,16.0413348 53.7833341,16.3969979 53.622,16.815 C53.4606659,17.2330021 53.38,17.6986641 53.38,18.212 C53.38,18.7253359 53.4643325,19.1836647 53.633,19.587 C53.8016675,19.9903354 54.0289986,20.3386652 54.315,20.632 C54.6010014,20.9253348 54.9346648,21.1489992 55.316,21.303 C55.6973352,21.4570008 56.1006645,21.534 56.526,21.534 C57.1273363,21.534 57.6443312,21.4093346 58.077,21.16 C58.5096688,20.9106654 58.8506654,20.617335 59.1,20.28 L62.312,24.13 C61.6079965,24.8340035 60.7426718,25.3949979 59.716,25.813 C58.6893282,26.2310021 57.5233399,26.44 56.218,26.44 C55.0446608,26.44 53.9410052,26.242002 52.907,25.846 C51.8729948,25.449998 50.9746705,24.8890036 50.212,24.163 C49.4493295,23.4369964 48.8480022,22.5716717 48.408,21.567 C47.9679978,20.5623283 47.748,19.4440062 47.748,18.212 Z M69.264,21.204 C68.5159963,21.204 67.9146689,21.2846659 67.46,21.446 C67.0053311,21.6073341 66.778,21.9079978 66.778,22.348 C66.778,22.5093341 66.8146663,22.6449995 66.888,22.755 C66.9613337,22.8650006 67.0566661,22.9566663 67.174,23.03 C67.2913339,23.1033337 67.419666,23.1583332 67.559,23.195 C67.698334,23.2316669 67.8266661,23.25 67.944,23.25 C68.4280024,23.25 68.8166652,23.0960015 69.11,22.788 C69.4033348,22.4799985 69.55,22.0840024 69.55,21.6 L69.55,21.204 L69.264,21.204 Z M69.22,18.652 C69.22,18.2999982 69.0990012,18.0396675 68.857,17.871 C68.6149988,17.7023325 68.296002,17.618 67.9,17.618 C67.4306643,17.618 66.9870021,17.716999 66.569,17.915 C66.1509979,18.113001 65.7806683,18.3439987 65.458,18.608 L62.928,16.1 C63.6320035,15.42533 64.4679952,14.9046685 65.436,14.538 C66.4040048,14.1713315 67.4013282,13.988 68.428,13.988 C69.5280055,13.988 70.4373297,14.1419985 71.156,14.45 C71.8746703,14.7580015 72.4429979,15.1833306 72.861,15.726 C73.2790021,16.2686694 73.5723325,16.8993297 73.741,17.618 C73.9096675,18.3366703 73.994,19.0993293 73.994,19.906 L73.994,26 L69.396,26 L69.396,25.076 L69.352,25.076 C69.0586652,25.5160022 68.6406694,25.8313324 68.098,26.022 C67.5553306,26.2126676 67.0273359,26.308 66.514,26.308 C66.0593311,26.308 65.593669,26.2420007 65.117,26.11 C64.6403309,25.9779993 64.2076686,25.7653348 63.819,25.472 C63.4303314,25.1786652 63.1113346,24.7973357 62.862,24.328 C62.6126654,23.8586643 62.488,23.2793368 62.488,22.59 C62.488,21.7833293 62.6969979,21.1270025 63.115,20.621 C63.5330021,20.1149975 64.0646634,19.7190014 64.71,19.433 C65.3553366,19.1469986 66.0776627,18.9526672 66.877,18.85 C67.6763373,18.7473328 68.4573295,18.696 69.22,18.696 L69.22,18.652 Z M85.566,22.326 C85.566,23.1033372 85.4010016,23.7559974 85.071,24.284 C84.7409983,24.8120026 84.3230025,25.2336651 83.817,25.549 C83.3109975,25.8643349 82.7573363,26.091666 82.156,26.231 C81.5546637,26.370334 80.9826694,26.44 80.44,26.44 C79.4426617,26.44 78.4636715,26.2970014 77.503,26.011 C76.5423285,25.7249986 75.7100035,25.3180026 75.006,24.79 L77.492,21.908 C77.8440018,22.2306683 78.258331,22.490999 78.735,22.689 C79.211669,22.887001 79.6699978,22.986 80.11,22.986 C80.2860009,22.986 80.4509992,22.9530003 80.605,22.887 C80.7590008,22.8209997 80.836,22.7000009 80.836,22.524 C80.836,22.3333324 80.7003347,22.1830005 80.429,22.073 C80.1576653,21.9629995 79.68467,21.8273341 79.01,21.666 C78.6433315,21.5779996 78.2693352,21.4496675 77.888,21.281 C77.5066648,21.1123325 77.1583349,20.8886681 76.843,20.61 C76.5276651,20.3313319 76.2673344,19.9903353 76.062,19.587 C75.8566656,19.1836647 75.754,18.7033361 75.754,18.146 C75.754,17.3979963 75.9189983,16.7600026 76.249,16.232 C76.5790016,15.7039974 76.9969975,15.2750017 77.503,14.945 C78.0090025,14.6149984 78.558997,14.3730008 79.153,14.219 C79.747003,14.0649992 80.3079974,13.988 80.836,13.988 C81.7306711,13.988 82.6179956,14.1199987 83.498,14.384 C84.3780044,14.6480013 85.1699965,15.0146643 85.874,15.484 L83.498,18.322 C83.1313315,18.0873322 82.7573352,17.9040007 82.376,17.772 C81.9946648,17.6399993 81.6206685,17.574 81.254,17.574 C81.0046654,17.574 80.7993341,17.6069997 80.638,17.673 C80.4766659,17.7390003 80.396,17.8673324 80.396,18.058 C80.396,18.2046674 80.4876657,18.3183329 80.671,18.399 C80.8543342,18.4796671 81.2759967,18.5859993 81.936,18.718 C82.3906689,18.8060004 82.8343312,18.9416658 83.267,19.125 C83.6996688,19.3083343 84.0883316,19.5429986 84.433,19.829 C84.7776684,20.1150014 85.0526656,20.4633313 85.258,20.874 C85.4633344,21.2846687 85.566,21.7686639 85.566,22.326 Z M95.07,18.674 C95.07,18.2633313 94.9196682,17.9260013 94.619,17.662 C94.3183318,17.3979987 93.9113359,17.266 93.398,17.266 C92.8406639,17.266 92.4080015,17.4199985 92.1,17.728 C91.7919985,18.0360015 91.6160002,18.3513317 91.572,18.674 L95.07,18.674 Z M99.448,20.324 C99.448,20.5146676 99.4443334,20.708999 99.437,20.907 C99.4296666,21.105001 99.4186667,21.2699993 99.404,21.402 L91.616,21.402 C91.6306667,21.6073344 91.7003327,21.7906659 91.825,21.952 C91.9496673,22.1133341 92.1036658,22.2526661 92.287,22.37 C92.4703342,22.4873339 92.6756655,22.575333 92.903,22.634 C93.1303345,22.692667 93.3613322,22.722 93.596,22.722 C94.0653357,22.722 94.4576651,22.6376675 94.773,22.469 C95.0883349,22.3003325 95.3266659,22.1133344 95.488,21.908 L99.096,23.734 C98.5826641,24.5700042 97.8383382,25.2299976 96.863,25.714 C95.8876618,26.1980024 94.7546731,26.44 93.464,26.44 C92.6279958,26.44 91.814004,26.3080013 91.022,26.044 C90.229996,25.7799987 89.5296697,25.3876693 88.921,24.867 C88.3123303,24.3463307 87.8246685,23.6973372 87.458,22.92 C87.0913315,22.1426628 86.908,21.2406718 86.908,20.214 C86.908,19.2606619 87.076665,18.3990038 87.414,17.629 C87.751335,16.8589961 88.2096638,16.206336 88.789,15.671 C89.3683362,15.135664 90.0503294,14.7213348 90.835,14.428 C91.6196706,14.1346652 92.4593289,13.988 93.354,13.988 C94.2633379,13.988 95.0919963,14.1456651 95.84,14.461 C96.5880037,14.7763349 97.229664,15.2163305 97.765,15.781 C98.300336,16.3456695 98.7146652,17.0166628 99.008,17.794 C99.3013348,18.5713372 99.448,19.4146621 99.448,20.324 Z M104.574,25.56 L99.888,14.428 L105.52,14.428 L107.236,20.522 L107.324,20.522 L108.842,14.428 L114.276,14.428 L109.524,26.704 C109.245332,27.4226703 108.930002,28.0643305 108.578,28.629 C108.225998,29.1936695 107.815336,29.673998 107.346,30.07 C106.876664,30.466002 106.323003,30.7666656 105.685,30.972 C105.046997,31.1773344 104.302671,31.28 103.452,31.28 C103.187999,31.28 102.916668,31.2690001 102.638,31.247 C102.359332,31.2249999 102.091668,31.1956668 101.835,31.159 C101.578332,31.1223331 101.340001,31.0856668 101.12,31.049 C100.899999,31.0123331 100.716667,30.9720002 100.57,30.928 L101.208,26.748 C101.398668,26.8213337 101.629665,26.8836664 101.901,26.935 C102.172335,26.9863336 102.417999,27.012 102.638,27.012 C103.195336,27.012 103.609665,26.8983345 103.881,26.671 C104.152335,26.4436655 104.353999,26.1540018 104.486,25.802 L104.574,25.56 Z M126.156,26.44 C125.52533,26.44 124.90567,26.3850006 124.297,26.275 C123.68833,26.1649995 123.101669,26.0036677 122.537,25.791 C121.972331,25.5783323 121.440669,25.3290014 120.942,25.043 C120.443331,24.7569986 119.996002,24.4380018 119.6,24.086 L122.79,20.61 C123.156668,21.006002 123.64433,21.3579985 124.253,21.666 C124.86167,21.9740015 125.488663,22.128 126.134,22.128 C126.427335,22.128 126.694999,22.0766672 126.937,21.974 C127.179001,21.8713328 127.3,21.6806681 127.3,21.402 C127.3,21.2553326 127.259667,21.1306672 127.179,21.028 C127.098333,20.9253328 126.955334,20.8190006 126.75,20.709 C126.544666,20.5989995 126.262335,20.4780007 125.903,20.346 C125.543665,20.2139993 125.092669,20.0600009 124.55,19.884 C124.021997,19.7079991 123.516002,19.4990012 123.032,19.257 C122.547998,19.0149988 122.119002,18.7180018 121.745,18.366 C121.370998,18.0139982 121.074001,17.5923358 120.854,17.101 C120.633999,16.6096642 120.524,16.0193368 120.524,15.33 C120.524,14.3619952 120.721998,13.54067 121.118,12.866 C121.514002,12.19133 122.023664,11.6376688 122.647,11.205 C123.270336,10.7723312 123.970663,10.4606676 124.748,10.27 C125.525337,10.0793324 126.29533,9.984 127.058,9.984 C128.084672,9.984 129.129661,10.181998 130.193,10.578 C131.256339,10.974002 132.191329,11.5459963 132.998,12.294 L129.742,15.616 C129.389998,15.1759978 128.957336,14.8423345 128.444,14.615 C127.930664,14.3876655 127.468669,14.274 127.058,14.274 C126.676665,14.274 126.368668,14.3289995 126.134,14.439 C125.899332,14.5490005 125.782,14.7286654 125.782,14.978 C125.782,15.2126678 125.902999,15.3886661 126.145,15.506 C126.387001,15.6233339 126.779331,15.7699991 127.322,15.946 C127.879336,16.1220009 128.465997,16.3273322 129.082,16.562 C129.698003,16.7966678 130.266331,17.1009981 130.787,17.475 C131.307669,17.8490019 131.736665,18.3073306 132.074,18.85 C132.411335,19.3926694 132.58,20.0673293 132.58,20.874 C132.58,21.8126714 132.393002,22.6303299 132.019,23.327 C131.644998,24.0236702 131.15367,24.6029977 130.545,25.065 C129.93633,25.5270023 129.25067,25.8716655 128.488,26.099 C127.72533,26.3263345 126.948004,26.44 126.156,26.44 Z M142.48,26.308 C141.907997,26.308 141.343336,26.2016677 140.786,25.989 C140.228664,25.7763323 139.774002,25.4793352 139.422,25.098 L139.378,25.098 L139.378,31.28 L134.34,31.28 L134.34,14.428 L139.114,14.428 L139.114,15.594 L139.158,15.594 C139.583335,15.1099976 140.096664,14.7433346 140.698,14.494 C141.299336,14.2446654 141.885997,14.12 142.458,14.12 C143.323338,14.12 144.085997,14.2959982 144.746,14.648 C145.406003,15.0000018 145.955998,15.4619971 146.396,16.034 C146.836002,16.6060029 147.169666,17.2513297 147.397,17.97 C147.624334,18.6886703 147.738,19.4219963 147.738,20.17 C147.738,20.9326705 147.624334,21.680663 147.397,22.414 C147.169666,23.147337 146.836002,23.8036638 146.396,24.383 C145.955998,24.9623362 145.40967,25.4279982 144.757,25.78 C144.10433,26.1320018 143.345338,26.308 142.48,26.308 Z M143.03,20.17 C143.03,19.6566641 142.868668,19.2093352 142.546,18.828 C142.223332,18.4466648 141.754003,18.256 141.138,18.256 C140.536664,18.256 140.056335,18.4466648 139.697,18.828 C139.337665,19.2093352 139.158,19.6566641 139.158,20.17 C139.158,20.7126694 139.337665,21.1746648 139.697,21.556 C140.056335,21.9373352 140.536664,22.128 141.138,22.128 C141.754003,22.128 142.223332,21.9410019 142.546,21.567 C142.868668,21.1929981 143.03,20.7273361 143.03,20.17 Z M149.608,14.428 L154.492,14.428 L154.492,15.748 L154.536,15.748 C154.785335,15.2786643 155.155664,14.8900015 155.647,14.582 C156.138336,14.2739985 156.713997,14.12 157.374,14.12 C157.770002,14.12 158.092665,14.1566663 158.342,14.23 L157.946,18.542 C157.784666,18.4979998 157.605001,18.4650001 157.407,18.443 C157.208999,18.4209999 157.029334,18.41 156.868,18.41 C156.207997,18.41 155.680002,18.6006648 155.284,18.982 C154.887998,19.3633352 154.69,19.8326639 154.69,20.39 L154.69,26 L149.608,26 L149.608,14.428 Z M165.184,21.204 C164.435996,21.204 163.834669,21.2846659 163.38,21.446 C162.925331,21.6073341 162.698,21.9079978 162.698,22.348 C162.698,22.5093341 162.734666,22.6449995 162.808,22.755 C162.881334,22.8650006 162.976666,22.9566663 163.094,23.03 C163.211334,23.1033337 163.339666,23.1583332 163.479,23.195 C163.618334,23.2316669 163.746666,23.25 163.864,23.25 C164.348002,23.25 164.736665,23.0960015 165.03,22.788 C165.323335,22.4799985 165.47,22.0840024 165.47,21.6 L165.47,21.204 L165.184,21.204 Z M165.14,18.652 C165.14,18.2999982 165.019001,18.0396675 164.777,17.871 C164.534999,17.7023325 164.216002,17.618 163.82,17.618 C163.350664,17.618 162.907002,17.716999 162.489,17.915 C162.070998,18.113001 161.700668,18.3439987 161.378,18.608 L158.848,16.1 C159.552004,15.42533 160.387995,14.9046685 161.356,14.538 C162.324005,14.1713315 163.321328,13.988 164.348,13.988 C165.448005,13.988 166.35733,14.1419985 167.076,14.45 C167.79467,14.7580015 168.362998,15.1833306 168.781,15.726 C169.199002,16.2686694 169.492332,16.8993297 169.661,17.618 C169.829668,18.3366703 169.914,19.0993293 169.914,19.906 L169.914,26 L165.316,26 L165.316,25.076 L165.272,25.076 C164.978665,25.5160022 164.560669,25.8313324 164.018,26.022 C163.475331,26.2126676 162.947336,26.308 162.434,26.308 C161.979331,26.308 161.513669,26.2420007 161.037,26.11 C160.560331,25.9779993 160.127669,25.7653348 159.739,25.472 C159.350331,25.1786652 159.031335,24.7973357 158.782,24.328 C158.532665,23.8586643 158.408,23.2793368 158.408,22.59 C158.408,21.7833293 158.616998,21.1270025 159.035,20.621 C159.453002,20.1149975 159.984663,19.7190014 160.63,19.433 C161.275337,19.1469986 161.997663,18.9526672 162.797,18.85 C163.596337,18.7473328 164.37733,18.696 165.14,18.696 L165.14,18.652 Z M171.542,20.17 C171.542,19.4219963 171.655666,18.6886703 171.883,17.97 C172.110334,17.2513297 172.443998,16.6060029 172.884,16.034 C173.324002,15.4619971 173.873997,15.0000018 174.534,14.648 C175.194003,14.2959982 175.956662,14.12 176.822,14.12 C177.438003,14.12 178.042997,14.2373322 178.637,14.472 C179.231003,14.7066678 179.718665,15.0806641 180.1,15.594 L180.166,15.594 L180.166,14.428 L184.94,14.428 L184.94,24.812 C184.94,26.0733396 184.734669,27.1219958 184.324,27.958 C183.913331,28.7940042 183.367003,29.4576642 182.685,29.949 C182.002997,30.4403358 181.229338,30.784999 180.364,30.983 C179.498662,31.181001 178.618671,31.28 177.724,31.28 C176.623994,31.28 175.524005,31.1370014 174.424,30.851 C173.323994,30.5649986 172.363337,30.1433361 171.542,29.586 L173.764,26.22 C174.321336,26.6453355 174.907997,26.956999 175.524,27.155 C176.140003,27.353001 176.726664,27.452 177.284,27.452 C177.650668,27.452 177.998998,27.4043338 178.329,27.309 C178.659002,27.2136662 178.948665,27.0743342 179.198,26.891 C179.447335,26.7076658 179.645333,26.4803347 179.792,26.209 C179.938667,25.9376653 180.012,25.6260018 180.012,25.274 L180.012,24.768 L179.946,24.768 C179.667332,25.0906683 179.253003,25.3766654 178.703,25.626 C178.152997,25.8753346 177.526004,26 176.822,26 C175.927329,26 175.150003,25.8423349 174.49,25.527 C173.829997,25.2116651 173.280002,24.786336 172.84,24.251 C172.399998,23.715664 172.073668,23.0960035 171.861,22.392 C171.648332,21.6879965 171.542,20.9473372 171.542,20.17 Z M176.25,20.17 C176.25,20.7273361 176.411332,21.1929981 176.734,21.567 C177.056668,21.9410019 177.525997,22.128 178.142,22.128 C178.743336,22.128 179.223665,21.9373352 179.583,21.556 C179.942335,21.1746648 180.122,20.7126694 180.122,20.17 C180.122,19.6566641 179.942335,19.2093352 179.583,18.828 C179.223665,18.4466648 178.743336,18.256 178.142,18.256 C177.525997,18.256 177.056668,18.4466648 176.734,18.828 C176.411332,19.2093352 176.25,19.6566641 176.25,20.17 Z M199.592,26 L194.642,26 L194.642,24.724 L194.598,24.724 C194.304665,25.1493355 193.868336,25.5196651 193.289,25.835 C192.709664,26.1503349 192.046004,26.308 191.298,26.308 C190.476663,26.308 189.802003,26.1650014 189.274,25.879 C188.745997,25.5929986 188.324335,25.2190023 188.009,24.757 C187.693665,24.2949977 187.473667,23.7743362 187.349,23.195 C187.224333,22.6156638 187.162,22.0400029 187.162,21.468 L187.162,14.428 L192.266,14.428 L192.266,20.544 C192.266,21.1306696 192.357666,21.5413322 192.541,21.776 C192.724334,22.0106678 192.999331,22.128 193.366,22.128 C193.703335,22.128 193.978332,21.9923347 194.191,21.721 C194.403668,21.4496653 194.51,21.0573359 194.51,20.544 L194.51,14.428 L199.592,14.428 L199.592,26 Z M209.624,18.674 C209.624,18.2633313 209.473668,17.9260013 209.173,17.662 C208.872332,17.3979987 208.465336,17.266 207.952,17.266 C207.394664,17.266 206.962002,17.4199985 206.654,17.728 C206.345998,18.0360015 206.17,18.3513317 206.126,18.674 L209.624,18.674 Z M214.002,20.324 C214.002,20.5146676 213.998333,20.708999 213.991,20.907 C213.983667,21.105001 213.972667,21.2699993 213.958,21.402 L206.17,21.402 C206.184667,21.6073344 206.254333,21.7906659 206.379,21.952 C206.503667,22.1133341 206.657666,22.2526661 206.841,22.37 C207.024334,22.4873339 207.229666,22.575333 207.457,22.634 C207.684334,22.692667 207.915332,22.722 208.15,22.722 C208.619336,22.722 209.011665,22.6376675 209.327,22.469 C209.642335,22.3003325 209.880666,22.1133344 210.042,21.908 L213.65,23.734 C213.136664,24.5700042 212.392338,25.2299976 211.417,25.714 C210.441662,26.1980024 209.308673,26.44 208.018,26.44 C207.181996,26.44 206.368004,26.3080013 205.576,26.044 C204.783996,25.7799987 204.08367,25.3876693 203.475,24.867 C202.86633,24.3463307 202.378668,23.6973372 202.012,22.92 C201.645331,22.1426628 201.462,21.2406718 201.462,20.214 C201.462,19.2606619 201.630665,18.3990038 201.968,17.629 C202.305335,16.8589961 202.763664,16.206336 203.343,15.671 C203.922336,15.135664 204.604329,14.7213348 205.389,14.428 C206.173671,14.1346652 207.013329,13.988 207.908,13.988 C208.817338,13.988 209.645996,14.1456651 210.394,14.461 C211.142004,14.7763349 211.783664,15.2163305 212.319,15.781 C212.854336,16.3456695 213.268665,17.0166628 213.562,17.794 C213.855335,18.5713372 214.002,19.4146621 214.002,20.324 Z" id="Casey-Sprague" fill="#3A4144"></path>
                        <path d="M6.27,31.73 C-0.760584865,24.6994151 -0.760584865,13.3005849 6.27,6.27 C13.3005849,-0.760584865 24.6994151,-0.760584865 31.73,6.27 C38.7605849,13.3005849 38.7605849,24.6994151 31.73,31.73 C24.6994151,38.7605849 13.3005849,38.7605849 6.27,31.73 Z" id="Shape" fill="#58A1E5" fill-rule="nonzero"></path>
                        <path d="M18.4,21 L12.8,21 L11,24 L10,24 L10,14 L11,14 L12.8,17 L18.4,17 L16,9 L18,9 L22.8,17 L28,17 C29.1045695,17 30,17.8954305 30,19 C30,20.1045695 29.1045695,21 28,21 L22.8,21 L18,29 L16,29 L18.4,21 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
                    </g>
                </svg>
                <div>
                    <a class="font-semibold text-blue hover:text-blue-darker no-underline mr-4" href="{{ url('/') }}">Home</a>
                    <a class="font-semibold text-blue hover:text-blue-darker no-underline mr-4" href="{{ url('/resume/download') }}">Resume</a>
                    <a class="font-semibold text-blue hover:text-blue-darker no-underline mr-4" href="https://github.com/caseysprague">GitHub</a>
                    <a class="font-semibold text-blue hover:text-blue-darker no-underline mr-4" href="https://twitter.com/caseysprague">Twitter</a>
                    <a class="font-semibold text-blue hover:text-blue-darker no-underline mr-4" href="https://www.linkedin.com/in/casey-sprague-3a3b4041/">LinkedIn</a>
                </div>
            </div> --}}
            <div class="border-t-8 border-blue-400 flex flex-col items-center p-8 font-sans min-h-screen">
                <div class="md:px-8 w-full max-w-xl">
                    @include('includes.logo')
                    <div class="mt-4 text-xs md:text-base space-x-4">
                        <a class="font-semibold text-gray-500 hover:text-blue-400 no-underline" href="{{ url('/') }}">Home</a>
                        <a class="font-semibold text-gray-500 hover:text-blue-400 no-underline" href="{{ url('/resume/download') }}">Resume</a>
                        <a class="font-semibold text-gray-500 hover:text-blue-400 no-underline" href="https://github.com/caseysprague">GitHub</a>
                        <a class="font-semibold text-gray-500 hover:text-blue-400 no-underline" href="https://twitter.com/caseysprague">Twitter</a>
                        <a class="font-semibold text-gray-500 hover:text-blue-400 no-underline" href="https://www.linkedin.com/in/casey-sprague-3a3b4041/">LinkedIn</a>
                    </div>
                </div>
                <div class="md:px-8 mt-32 w-full max-w-xl">
                    <h1 class="text-2xl font-extrabold text-gray-700 mb-16">
                        Blog Posts
                    </h1>
                    @foreach ($posts as $post)
                        <div class="my-6 hover:bg-gray-100 rounded-lg p-4 -mx-4">
                            <a href="{{ url("/blog/{$post->slug}") }}" class="no-underline">
                                <div class="block text-gray-400 uppercase font-semibold text-xs tracking-wide mb-2">{{ $post->publish_date->format('F j, Y') }}</div>
                                <h3 class="text-lg text-gray-700 font-bold">{{ $post->title }}</h3>
                                @if ($post->excerpt)
                                    <p class="text-gray-500 text-base leading-normal mt-2">{{ $post->excerpt }}</p>
                                @endif
                            </a>
                        </div>
                    @endforeach
                    <div class="flex justify-between">
                        @if ($posts->previousPageUrl())
                            <a href="{{ $posts->previousPageUrl() }}" class="mt-8 text-gray-500 hover:text-blue-400 text-sm no-underline">← Back</a>
                        @endif
                        @if ($posts->nextPageUrl())
                            <a href="{{ $posts->nextPageUrl() }}" class="mt-8 text-gray-500 hover:text-blue-400 text-sm no-underline">More posts →</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    </body>
@endsection
