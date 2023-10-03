@php
    $nextLink = null;
    $prevLink = null;
    
    if ($kelompok_laporan['data_penjualan']) {
        $nextLink = $kelompok_laporan['data_penjualan']->toArray()['next_page_url'];
        $prevLink = $kelompok_laporan['data_penjualan']->toArray()['prev_page_url'];
    }
@endphp

<div class="card bg-white border mb-4">
    <div class="card-body">
        <div class="flex justify-between items-center">
            <div>
                Status: Disetujui
            </div>
            <button type="button" class="btn btn-primary" onclick="modalStatus.showModal()">
                <i class="material-icons">edit</i>
                <span class="hidden lg:inline">
                    Buat Perubahan
                </span>
            </button>
        </div>
    </div>
</div>

<x-dialog id="modalStatus" header="Edit Status" class="w-4/6 max-w-full">
    <form action="{{ '' }}" method="POST" x-data="{
        statusLaporan: ''
    }">
        @csrf
        @method('PUT')

        <div class="flex justify-evenly lg:flex-row flex-col lg:space-y-0 space-y-3">
            <div x-bind:class="'card flex cursor-pointer items-center justify-center hover:bg-gray-50 transition border p-4 ' + (
                statusLaporan == '1' ?
                '!border-primary shadow' : '')"
                x-on:click="statusLaporan = '1'">
                <svg xmlns="http://www.w3.org/2000/svg" id="bb738736-4bb6-4e67-b796-8dd67505cf1f" data-name="Layer 1"
                    viewBox="0 0 650.11366 477.61186" class="lg:h-72 lg:w-72 w-20 h-20"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M447.62579,563.92822c-95.21778,0-172.68262-77.46484-172.68262-172.68262S352.408,218.563,447.62579,218.563a173.06169,173.06169,0,0,1,141.16113,73.19336l-1.63379,1.15429A171.05768,171.05768,0,0,0,447.62579,220.563c-94.11426,0-170.68262,76.56836-170.68262,170.68261s76.56836,170.68262,170.68262,170.68262a169.5876,169.5876,0,0,0,135.49609-66.87207l1.58594,1.2168A171.569,171.569,0,0,1,447.62579,563.92822Z"
                        transform="translate(-274.94317 -211.19407)" fill="#e6e6e6"></path>
                    <path d="M519.01551,362.328a9.572,9.572,0,1,1,9.572-9.572A9.572,9.572,0,0,1,519.01551,362.328Z"
                        transform="translate(-274.94317 -211.19407)" fill="#e6e6e6"></path>
                    <path
                        d="M522.35382,354.759l-2.003-2.003,2.003-2.003a.94424.94424,0,1,0-1.33535-1.33535l-2.003,2.003-2.003-2.003a.94422.94422,0,0,0-1.33533,1.33533l2.003,2.003-2.003,2.003a.94424.94424,0,0,0,1.33535,1.33535l2.003-2.003,2.003,2.003a.94422.94422,0,1,0,1.33533-1.33533Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <circle cx="196.46801" cy="19.04874" r="19.04875" fill="#e6e6e6"></circle>
                    <path
                        d="M468.81254,240.1568a2.1183,2.1183,0,0,1-1.695-.84774l-5.19679-6.92916a2.11886,2.11886,0,1,1,3.39026-2.54253l3.39992,4.53288,8.73224-13.0982a2.119,2.119,0,0,1,3.52615,2.35077l-10.39358,15.59036a2.11978,2.11978,0,0,1-1.70427.94293Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <rect x="168.91529" y="53.41449" width="55.94642" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <rect x="140.50202" y="77.34146" width="112.77296" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <rect x="140.50202" y="101.26843" width="112.77296" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <path d="M460.72206,567.57545a9.572,9.572,0,1,1,9.572-9.572A9.572,9.572,0,0,1,460.72206,567.57545Z"
                        transform="translate(-274.94317 -211.19407)" fill="#e6e6e6"></path>
                    <path
                        d="M464.06037,560.00643l-2.003-2.003,2.003-2.003a.94423.94423,0,0,0-1.33534-1.33535l-2.003,2.003-2.003-2.003a.94422.94422,0,0,0-1.33533,1.33533l2.003,2.003-2.003,2.003a.94423.94423,0,1,0,1.33534,1.33535l2.003-2.003,2.003,2.003a.94422.94422,0,1,0,1.33533-1.33533Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <circle cx="138.17456" cy="224.29618" r="19.04875" fill="#e6e6e6"></circle>
                    <path
                        d="M410.51908,445.40424a2.11829,2.11829,0,0,1-1.69495-.84774l-5.19679-6.92916a2.11886,2.11886,0,1,1,3.39026-2.54253l3.39991,4.53288,8.73225-13.0982a2.119,2.119,0,1,1,3.52615,2.35077l-10.39358,15.59037a2.11981,2.11981,0,0,1-1.70427.94292Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <rect x="110.62184" y="258.66194" width="55.94642" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <rect x="82.20857" y="282.5889" width="112.77296" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <rect x="82.20857" y="306.51587" width="112.77296" height="11.96348" rx="5.06951"
                        fill="#e6e6e6"></rect>
                    <path
                        d="M658.73263,526.73553a13.21806,13.21806,0,1,1,13.21806-13.21806A13.21807,13.21807,0,0,1,658.73263,526.73553Z"
                        transform="translate(-274.94317 -211.19407)" fill="#e6e6e6"></path>
                    <path
                        d="M663.34251,516.28344l-2.76592-2.76592,2.766-2.76595a1.3039,1.3039,0,0,0-1.844-1.844l-2.766,2.766-2.766-2.766a1.30388,1.30388,0,0,0-1.844,1.844l2.76595,2.76595-2.76595,2.766a1.3039,1.3039,0,0,0,1.844,1.844l2.76595-2.76595,2.76592,2.76592a1.30388,1.30388,0,0,0,1.844-1.844Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <circle cx="326.19937" cy="133.14441" r="26.3045" fill="#057aff"></circle>
                    <path
                        d="M597.55406,358.02875a2.92518,2.92518,0,0,1-2.34058-1.17064l-7.17627-9.56852a2.92595,2.92595,0,1,1,4.68163-3.511l4.695,6.25947,12.0584-18.08737a2.92607,2.92607,0,1,1,4.86927,3.24619l-14.35254,21.52881a2.92726,2.92726,0,0,1-2.35343,1.30209C597.60835,358.02828,597.5812,358.02875,597.55406,358.02875Z"
                        transform="translate(-274.94317 -211.19407)" fill="#fff"></path>
                    <rect x="288.15169" y="180.60024" width="77.25667" height="16.52043" rx="5.06951"
                        fill="#3f3d56"></rect>
                    <rect x="248.91568" y="213.64109" width="155.7287" height="16.52043" rx="5.06951"
                        fill="#3f3d56"></rect>
                    <rect x="248.91568" y="246.68195" width="155.7287" height="16.52043" rx="5.06951"
                        fill="#3f3d56"></rect>
                    <polygon points="450.676 463.637 437.92 463.636 431.851 414.433 450.679 414.434 450.676 463.637"
                        fill="#ffb6b6"></polygon>
                    <path
                        d="M725.27906,670.66458l-13.62-5.54-.39-.16-7.52,5.7a16.01266,16.01266,0,0,0-16.01,16.01v.52h41.13v-16.53Z"
                        transform="translate(-274.94317 -211.19407)" fill="#2f2e41"></path>
                    <polygon points="558.496 452.952 546.314 456.737 525.916 411.551 543.896 405.965 558.496 452.952"
                        fill="#ffb6b6"></polygon>
                    <path
                        d="M831.87728,660.26845l-14.6505-1.24835-.41994-.03708-5.48956,7.67493A16.01269,16.01269,0,0,0,800.77987,686.698l.15431.49654,39.277-12.20625L835.30557,659.203Z"
                        transform="translate(-274.94317 -211.19407)" fill="#2f2e41"></path>
                    <path
                        d="M782.39948,422.78008l5.18807,14.75553v7.97628l-.723,8.77129,8.0301,29.25347,6.29922,64.50845,31.70078,95.49155-24.30708,7L746.52778,494.513,726.92613,652.3261l-22.22866-.593s-3.80284-9.19644-2.80284-14.19644,1,1,1-5-4.3351-3.3937-1.16755-8.19685,2.77323-9.00788,2.97039-11.90551-1.80284-119.89764-1.80284-123.89764-.69291-3.12391-.34645-7.062,4.74142-2.31915,3.54394-9.1286-1.59181-5.6191-1.39465-10.71427,2.95307-34.97005,2.95307-34.97005Z"
                        transform="translate(-274.94317 -211.19407)" fill="#2f2e41"></path>
                    <path
                        d="M699.20556,427.58018l44.56215-42.97482,12.35119-34.972-18.21837-7.922c-9.35775,8.964-19.47307,36.88414-19.47307,36.88414l-30.66508,39.013c-.239.08184-.47728.16874-.71265.27268a8.77545,8.77545,0,1,0,12.15583,9.699Z"
                        transform="translate(-274.94317 -211.19407)" fill="#ffb8b8"></path>
                    <path
                        d="M732.77418,345.61609l23.10872,7.33623.08711-.0145c8.601-1.44076,15.73808-15.48842,20.21041-27.01921a16.09129,16.09129,0,0,0-8.193-20.38362h0a16.12676,16.12676,0,0,0-16.89018,2.131l-11.86648,9.6963Z"
                        transform="translate(-274.94317 -211.19407)" fill="#057aff"></path>
                    <path
                        d="M786.32548,441.73565l.135-.17939c7.21-9.56235-2.6512-33.24234-4.142-36.67665l6.70395-1.98581-1.1685-12.76444-.56282-5.69175,5.21244-4.95.01755-.12634,3.58474-25.511,4.69041-16.88452a37.32239,37.32239,0,0,0-9.65629-36.43113l-9.58845-9.51991L770.064,273.03391l-19.26055-.49726-6.92606,12.30362a28.08226,28.08226,0,0,0-22.46071,28.10125l.65206,32.7546-6.911,40.58295-.19388,7.37174-6.78319,7.158,1.25407,7.2366-5.074,2.02112-2.48292,10.28305c-.94826,1.18639-7.20952,9.10084-7.26648,11.30721-.00855.33125.22768.65774.74323,1.02651,4.05284,2.89967,26.70525,9.1828,36.90026,5.40544,10.85957-4.02024,53.4206,3.53019,53.84939,3.607Z"
                        transform="translate(-274.94317 -211.19407)" fill="#057aff"></path>
                    <path
                        d="M739.11062,337.90144l-9.83856-19.61512c-14.28065.97549-42.62387,17.48727-42.62387,17.48727l-53.62638,11.36993a9.68825,9.68825,0,1,0,2.64134,16.55568l68.216-4.88972Z"
                        transform="translate(-274.94317 -211.19407)" fill="#ffb8b8"></path>
                    <path
                        d="M735.14245,341.12219l25.695-19.09515,4.52613-16.31071a17.81557,17.81557,0,0,0-5.35827-18.02553h0a17.77346,17.77346,0,0,0-24.25389.78253c-9.66945,9.65146-20.698,23.11613-18.329,32.45288l.024.09464Z"
                        transform="translate(-274.94317 -211.19407)" fill="#057aff"></path>
                    <circle cx="486.12469" cy="34.03549" r="22.84874" fill="#ffb8b8"></circle>
                    <path
                        d="M776.10436,269.12528c-3.82175-1.79511-8.28547-.70422-12.50455-.53819s-9.331-1.4245-10.22623-5.55085c-.66191-3.05105,1.32763-6.39514.074-9.25439-1.36715-3.11808-5.47069-3.56184-8.76148-4.43489a20.197,20.197,0,0,1-14.58438-18.90622c-.22863,1.70365,2.68647,2.26321,3.644.83567s.298-3.4034-.75775-4.75988-2.48076-2.43979-3.27694-3.9632-.64134-3.78587.91341-4.519a12.69623,12.69623,0,0,0,8.0415,6.61488c-.70719-2.1482.29272-4.56332,1.90215-6.15223a18.41178,18.41178,0,0,1,5.81093-3.422c5.26689-2.28313,11.4166-4.55509,16.517-1.92089a9.87675,9.87675,0,0,1,5.10582,6.91138c9.43478.79777,19.12284,11.01793,18.58581,20.47114-.57813,10.17663-1,11-9.4716,28.125"
                        transform="translate(-274.94317 -211.19407)" fill="#2f2e41"></path>
                    <path
                        d="M890.563,687.78085H857.37645l-.14258-.25879c-.42432-.76953-.834-1.585-1.2168-2.42285-3.41845-7.31836-4.86328-15.68848-6.13818-23.07325l-.96-5.5664a3.43688,3.43688,0,0,1,5.41016-3.36231q7.56517,5.50488,15.13623,10.999c1.91113,1.39062,4.09375,3,6.18408,4.73925.20166-.97949.4126-1.96191.62353-2.93066a3.43916,3.43916,0,0,1,6.28077-1.08594l3.88281,6.23828c2.832,4.55567,5.33154,9.04493,4.82226,13.88672a.756.756,0,0,1-.01318.17578,10.94679,10.94679,0,0,1-.56348,2.33106Z"
                        transform="translate(-274.94317 -211.19407)" fill="#f0f0f0"></path>
                    <path
                        d="M923.87237,688.49862l-315.3575.30731a1.19069,1.19069,0,0,1,0-2.38135l315.3575-.30731a1.19069,1.19069,0,0,1,0,2.38135Z"
                        transform="translate(-274.94317 -211.19407)" fill="#cacaca"></path>
                </svg>
            </div>
            <div x-bind:class="'card flex cursor-pointer items-center justify-center hover:bg-gray-50 transition border p-4 ' + (
                statusLaporan == '2' ?
                '!border-primary shadow' : '')"
                x-on:click="statusLaporan = '2'">
                <svg xmlns="http://www.w3.org/2000/svg" id="a" viewBox="0 0 586.47858 659.29778"
                    class="lg:h-72 lg:w-72 w-20 h-20" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle cx="332.47856" cy="254" r="254.00001" fill="#f2f2f2"></circle>
                    <path
                        d="M498.46363,113.58835H33.17063c-.99774-.02133-1.78931-.84746-1.76797-1.84521,.02069-.96771,.80026-1.74727,1.76797-1.76796H498.46363c.99774,.02133,1.78931,.84746,1.76794,1.84521-.02069,.96771-.80023,1.74727-1.76794,1.76796Z"
                        fill="#cacaca"></path>
                    <rect x="193.77441" y="174.47256" width="163.61147" height="34.98639" rx="17.49318"
                        ry="17.49318" fill="#fff"></rect>
                    <path
                        d="M128.17493,244.44534H422.98542c9.66122,0,17.49316,7.83197,17.49316,17.49319h0c0,9.66122-7.83194,17.49319-17.49316,17.49319H128.17493c-9.66122,0-17.49318-7.83197-17.49318-17.49319h0c0-9.66122,7.83196-17.49319,17.49318-17.49319Z"
                        fill="#fff"></path>
                    <path
                        d="M128.17493,314.41812H422.98542c9.66122,0,17.49316,7.83197,17.49316,17.49319h0c0,9.66122-7.83194,17.49319-17.49316,17.49319H128.17493c-9.66122,0-17.49318-7.83197-17.49318-17.49319h0c0-9.66122,7.83196-17.49319,17.49318-17.49319Z"
                        fill="#fff"></path>
                    <path
                        d="M91.64085,657.75932l-.69385-.06793c-23.54068-2.42871-44.82135-15.08929-58.18845-34.61835-3.66138-5.44159-6.62299-11.32251-8.815-17.50409l-.21069-.58966,.62375-.05048c7.44699-.59924,15.09732-1.86292,18.49585-2.46417l-21.91473-7.42511-.1355-.65033c-1.29926-6.10406,1.24612-12.38458,6.4285-15.86176,5.19641-3.64447,12.08731-3.76111,17.40405-.29449,2.38599,1.52399,4.88162,3.03339,7.29489,4.49359,8.29321,5.01636,16.8688,10.20337,23.29828,17.30121,9.74951,10.97778,14.02298,25.76984,11.63,40.25562l4.7829,17.47595Z"
                        fill="#f2f2f2"></path>
                    <polygon
                        points="171.30016 646.86102 182.10017 646.85999 187.23916 605.198 171.29716 605.19897 171.30016 646.86102"
                        fill="#a0616a"></polygon>
                    <path
                        d="M170.9192,658.12816l33.21436-.00122v-.41998c-.00049-7.13965-5.78833-12.92737-12.92798-12.92773h-.00079l-6.06702-4.60278-11.3197,4.60345-2.89941,.00012,.00055,13.34814Z"
                        fill="#2f2e41"></path>
                    <polygon
                        points="84.74116 616.94501 93.38016 623.42603 122.49316 593.185 109.74116 583.61902 84.74116 616.94501"
                        fill="#a0616a"></polygon>
                    <path
                        d="M77.67448,625.72966l26.569,19.93188,.25208-.336c4.2843-5.71136,3.12799-13.81433-2.58279-18.09937l-.00064-.00049-2.09079-7.32275-11.81735-3.11102-2.31931-1.73993-8.01019,10.67767Z"
                        fill="#2f2e41"></path>
                    <path
                        d="M120.64463,451.35271s.59625,16.26422,1.3483,29.30737c.12335,2.13916-4.88821,4.46301-4.75842,6.7901,.08609,1.54395,1.02808,3.04486,1.1156,4.65472,.09235,1.69897-1.20822,3.20282-1.1156,4.95984,.09052,1.71667,1.57422,3.6853,1.66373,5.44244,.96317,18.9093,4.45459,41.54633,.9584,47.87439-1.72299,3.11871-23.68533,46.32446-23.68533,46.32446,0,0,12.23666,18.35498,15.73285,12.23663,4.61771-8.08099,40.20615-45.88745,40.20615-53.10712,0-7.21088,8.23346-61.25323,8.23346-61.25323l5.74103,31.98169,2.63239,6.33655-.82715,3.71997,1.70117,5.02045,.09192,4.96838,1.65619,9.22614s-4.98199,71.88159-2.17633,73.88312c2.81439,2.01038,16.44086,5.62018,18.04901,2.01038,1.59955-3.6098,12.0108-75.01947,12.0108-75.01947,0,0,1.6781-32.72424,3.49622-63.14111,.1048-1.76556,1.34607-3.89825,1.4422-5.63763,.11365-2.01898-.67297-4.64111-.56818-6.599,.11365-2.24628,1.11005-3.82831,1.20618-5.97852,.74292-16.6156-3.42761-36.84912-4.7561-38.84192-4.01202-6.01343-7.62177-10.82074-7.62177-10.82074,0,0-54.03558-17.75403-68.47485,.28625l-3.30185,25.37585Z"
                        fill="#2f2e41"></path>
                    <path
                        d="M174.53779,284.10378l-21.4209-4.28418-9.9964,13.56656h0c-18.65262,18.34058-18.93359,34.52753-15.60379,60.47382v36.41553l-2.41,24.41187s-8.53156,17.84521,.26788,22.00006,66.59857,3.80066,72.117,2.14209,.73517-3.69482-.71399-11.4245c-2.72211-14.51929-.90131-7.51562-.71399-12.13849,2.68585-66.31363-3.57013-93.5379-4.20544-100.69376l-10.89398-19.75858-6.42639-10.71042Z"
                        fill="#3f3d56"></path>
                    <path
                        d="M287.43909,337.57097c-2.23248,4.23007-7.47144,5.84943-11.70148,3.61694-.45099-.23804-.88013-.51541-1.28229-.82895l-46.26044,29.37308,.13336-15.9924,44.93842-26.07846c3.20093-3.58887,8.70514-3.90332,12.29401-.70239,3.00305,2.67844,3.7796,7.0657,1.87842,10.61218Z"
                        fill="#a0616a"></path>
                    <path
                        d="M157.62488,302.62425l-5.26666-.55807c-4.86633-.50473-9.64093,1.57941-12.57947,5.491-1.12549,1.48346-1.9339,3.18253-2.37491,4.99164l-.00317,.01447c-1.32108,5.44534,.75095,11.15201,5.25803,14.48117l18.19031,13.41101c12.76544,17.24899,36.75653,28.69272,64.89832,37.98978l43.74274-27.16666-15.47186-18.73843-30.00336,16.0798-44.59833-34.52374-.0257-.02075-16.97424-10.936-4.79169-.5152Z"
                        fill="#3f3d56"></path>
                    <circle cx="167.29993" cy="248.60526" r="24.9798" fill="#a0616a"></circle>
                    <path
                        d="M167.8769,273.59047c-.20135,.00662-.4032,.01108-.6048,.01657-.0863,.22388-.17938,.44583-.2868,.66357l.8916-.68015Z"
                        fill="#2f2e41"></path>
                    <path
                        d="M174.73243,249.29823c.03918,.24612,.09912,.48846,.17914,.72449-.03302-.24731-.09308-.49026-.17914-.72449Z"
                        fill="#2f2e41"></path>
                    <path
                        d="M192.59852,224.6942c-1.0282,3.19272-1.94586-.85715-5.32825-.12869-4.06885,.87625-8.80377,.57532-12.13586-1.91879-4.96478-3.64273-11.39874-4.62335-17.22333-2.62509-5.70154,2.01706-15.25348,3.43933-16.73907,9.30179-.51642,2.03781-.7215,4.24933-1.97321,5.9382-1.09436,1.47662-2.82166,2.31854-4.26608,3.45499-4.87726,3.83743-1.14954,14.73981,1.15881,20.50046,2.30838,5.76065,7.60355,9.95721,13.42526,12.10678,5.63281,2.07977,11.7464,2.44662,17.75531,2.28317,1.04517-2.7106,.59363-5.84137-.26874-8.65134-.93359-3.04199-2.31592-5.97791-2.70593-9.13599s.46643-6.74527,3.11444-8.50986c2.4339-1.62192,6.39465-.63388,7.32062,1.98843-.54028-3.27841,2.7807-6.4509,6.20508-7.00882,3.67651-.599,7.35291,.72833,11.01886,1.38901s2.36475-14.77301,.64209-18.98425Z"
                        fill="#2f2e41"></path>
                    <circle cx="281.3585" cy="285.71051" r="51.12006"
                        transform="translate(-26.58509 542.54478) rotate(-85.26884)" fill="#057aff"></circle>
                    <path
                        d="M294.78675,264.41051l-13.42828,13.42828-13.42828-13.42828c-2.17371-2.17374-5.69806-2.17374-7.87177,0s-2.17371,5.69803,0,7.87177l13.42828,13.42828-13.42828,13.42828c-2.17169,2.17575-2.1684,5.70007,.00739,7.87177,2.17285,2.16879,5.69153,2.16879,7.86438-.00003l13.42828-13.42828,13.42828,13.42828c2.17578,2.17169,5.70007,2.1684,7.87177-.00735,2.16882-2.17288,2.16882-5.6915,0-7.86438l-13.42828-13.42828,13.42828-13.42828c2.17371-2.17374,2.17371-5.69803,0-7.87177s-5.69806-2.17374-7.87177,0h0Z"
                        fill="#fff"></path>
                    <path
                        d="M261.21387,242.74385c1.5069,4.53946-.95154,9.44101-5.49097,10.94791-.48401,.16064-.9812,.27823-1.4859,.35141l-10.83051,53.71692-11.44788-11.16785,12.29266-50.48209c-.37366-4.7944,3.21008-8.98395,8.00452-9.3576,4.01166-.31265,7.71509,2.16425,8.95807,5.9913Z"
                        fill="#a0616a"></path>
                    <path
                        d="M146.12519,312.22478l-4.04883,3.41412c-3.73322,3.16214-5.53476,8.05035-4.74649,12.87888,.29129,1.83917,.95773,3.59879,1.95786,5.16949l.00824,.0123c3.01477,4.72311,8.5672,7.17865,14.08978,6.23117l22.27075-3.84171c21.28461,2.72995,46.15155-6.65967,72.34302-20.53055l10.67969-50.37274-24.23297-1.80811-9.16821,32.78271-55.78815,8.28149-.03278,.00415-19.64294,4.67767-3.68896,3.1011Z"
                        fill="#3f3d56"></path>
                    <path
                        d="M272.93684,658.99046l-271.75,.30731c-.65759-.00214-1.18896-.53693-1.18683-1.19452,.00211-.6546,.53223-1.18469,1.18683-1.18683l271.75-.30731c.65759,.00214,1.18896,.53693,1.18683,1.19452-.00208,.6546-.53223,1.18469-1.18683,1.18683Z"
                        fill="#cacaca"></path>
                    <g>
                        <ellipse cx="56.77685" cy="82.05834" rx="8.45661" ry="8.64507" fill="#3f3d56">
                        </ellipse>
                        <ellipse cx="85.9906" cy="82.05834" rx="8.45661" ry="8.64507" fill="#3f3d56">
                        </ellipse>
                        <ellipse cx="115.20435" cy="82.05834" rx="8.45661" ry="8.64507" fill="#3f3d56">
                        </ellipse>
                        <path
                            d="M148.51577,88.89113c-.25977,0-.51904-.10059-.71484-.30078l-5.70605-5.83301c-.38037-.38867-.38037-1.00977,0-1.39844l5.70605-5.83252c.38721-.39453,1.021-.40088,1.41406-.01562,.39502,.38623,.40186,1.01953,.01562,1.41406l-5.02197,5.1333,5.02197,5.13379c.38623,.39453,.37939,1.02783-.01562,1.41406-.19434,.19043-.44678,.28516-.69922,.28516Z"
                            fill="#3f3d56"></path>
                        <path
                            d="M158.10415,88.89113c-.25244,0-.50488-.09473-.69922-.28516-.39502-.38623-.40186-1.01904-.01562-1.41406l5.02148-5.13379-5.02148-5.1333c-.38623-.39453-.37939-1.02783,.01562-1.41406,.39404-.38672,1.02783-.37939,1.41406,.01562l5.70557,5.83252c.38037,.38867,.38037,1.00977,0,1.39844l-5.70557,5.83301c-.1958,.2002-.45508,.30078-.71484,.30078Z"
                            fill="#3f3d56"></path>
                        <path
                            d="M456.61398,74.41416h-10.60999c-1.21002,0-2.19,.97998-2.19,2.19v10.62c0,1.21002,.97998,2.19,2.19,2.19h10.60999c1.21002,0,2.20001-.97998,2.20001-2.19v-10.62c0-1.21002-.98999-2.19-2.20001-2.19Z"
                            fill="#3f3d56"></path>
                        <path
                            d="M430.61398,74.41416h-10.60999c-1.21002,0-2.19,.97998-2.19,2.19v10.62c0,1.21002,.97998,2.19,2.19,2.19h10.60999c1.21002,0,2.20001-.97998,2.20001-2.19v-10.62c0-1.21002-.98999-2.19-2.20001-2.19Z"
                            fill="#3f3d56"></path>
                        <path
                            d="M481.11398,74.91416h-10.60999c-1.21002,0-2.19,.97998-2.19,2.19v10.62c0,1.21002,.97998,2.19,2.19,2.19h10.60999c1.21002,0,2.20001-.97998,2.20001-2.19v-10.62c0-1.21002-.98999-2.19-2.20001-2.19Z"
                            fill="#3f3d56"></path>
                        <path
                            d="M321.19229,78.95414h-84.81c-1.48004,0-2.67004,1.20001-2.67004,2.67004s1.19,2.66998,2.67004,2.66998h84.81c1.46997,0,2.66998-1.20001,2.66998-2.66998s-1.20001-2.67004-2.66998-2.67004Z"
                            fill="#3f3d56"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="mt-5 flex flex-col justify-center items-center">
            <div class="mb-3">
                <input type="text" class="hidden" x-model="statusLaporan" name="status">
                <span x-text="statusLaporan !== '' ? (statusLaporan == '1' ? 'Setuju' : 'Tolak') : ''"></span>
            </div>
            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>
        </div>
    </form>
</x-dialog>

@if ($kelompok_laporan['hasil'] && $kelompok_laporan['data_penjualan'])
    <div x-data="{
        print: false,
    }">
        <div class="space-y-4" x-show="!print">
            <div>
                <div class="flex items-center justify-center space-x-4">
                    <a href="{{ $nextLink }}" {{ !$nextLink ? 'disabled' : '' }}
                        class="btn btn-primary text-xl">&laquo;</a>
                    <a href="{{ $prevLink }}" {{ !$prevLink ? 'disabled' : '' }}
                        class="btn btn-primary text-xl">&raquo;</a>
                </div>
            </div>

            <div class="card bg-white border">
                <div class="card-body">
                    <div class="card-title">
                        Grafik Penjualan
                    </div>
                    <canvas id="grafikHasilPenjualan"></canvas>
                </div>
            </div>
            <div class="card bg-white border">
                <div class="card-body">
                    <div class="card-title">
                        Grafik Nilai Keuntungan
                    </div>
                    <canvas id="grafikNilaiKeuntungan"></canvas>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-center space-x-4">
                    <a href="{{ $nextLink }}" {{ !$nextLink ? 'disabled' : '' }}
                        class="btn btn-primary text-xl">&laquo;</a>
                    <a href="{{ $prevLink }}" {{ !$prevLink ? 'disabled' : '' }}
                        class="btn btn-primary text-xl">&raquo;</a>
                </div>
            </div>
            @php
                $medals = [
                    'gold' => [
                        'img' => 'https://static.vecteezy.com/system/resources/previews/006/873/343/non_2x/gold-medal-award-trophy-winner-medal-vector.jpg',
                        'message' => 'Good Job.. Super duper keren.. kalian adalah pengusaha handal, capaian kalian saat ini membuktikan
                        bahwa kalian mampu bersaing dan menjadi winner nya, tetap pertahankan dan lebih semangat lagi agar usaha kalian makin dikenal dan berkembang pesat, namun jangan lupa selalu bersyukur dan berdoa agar Allah selalu menolong dan menjadi penguat di hati kalian.',
                    ],
                    'silver' => [
                        'img' => 'https://static.vecteezy.com/system/resources/previews/006/871/497/non_2x/award-trophy-medal-silver-vector.jpg',
                        'message' => 'Super keren, Selamat buat kalian karena sudah mendapatkan keuntungan diatas 50% artinya kalian sudah melampaui Titik Impas, biaya produksi sudah dapat ditutup artinya kalian sudah menghasilkan penerimaan lebih besar daripada pengeluaran, usaha kalian masih bisa diperbesar lagi dan agar capaian keuntungan lebih tinggi dari sekarang, yuk..semangat lagi agar impian menjadi pengusaha akan segera terwujud…',
                    ],
                    'bronze' => [
                        'img' => 'https://static.vecteezy.com/system/resources/previews/006/871/494/non_2x/award-trophy-medal-bronze-vector.jpg',
                        'message' => 'Kalian sudah keren banget ketika sampai di titik ini,  titik dimana penerimaan sama dengan modal yang dikeluarkan, tidak terjadi kerugian atau keuntungan dan di titik ini kalian sudah dapat mengidentifikasi sejauh mana kalian mencapai tingkat produksi yang menghasilkan penerimaan yang cukup untuk menutupi biaya produksi, maka untuk mendapatkan keuntungan kalian perlu menaikkan harga produk atau mengurangi biaya produksi.',
                    ],
                    'nope' => [
                        'img' => 'https://www.freepnglogos.com/uploads/x-png/x-png-x-drawing-transparent-background-32.png',
                        'message' => 'Sedikit lagi kamu akan berhasil. Aku tahu bahwa mencapai target yang kamu inginkan bisa menjadi sesuatu yang sulit, dan aku merasa sedih mendengar bahwa kamu menghadapi kegagalan ini. Tetapi ingatlah, kegagalan hanyalah satu langkah menuju kesuksesan. Jangan biarkan kegagalan ini menghentikanmu atau meruntuhkan semangatmu.',
                    ],
                ];
                
                $result = $medals[$kelompok_laporan['hasil']['medal']];
            @endphp
            <div class="stats w-full border">
                <div class="stat">
                    <div class="stat-figure text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-title">Modal Usaha</div>
                    <div class="stat-value text-orange-500"><x-format-money :value="$kelompok_laporan['hasil']['modal']"></x-format-money>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>

                    </div>
                    <div class="stat-title">Penghasilan</div>
                    <div class="stat-value text-green-500"><x-format-money :value="$kelompok_laporan['hasil']['total']"></x-format-money></div>
                </div>
            </div>
            <div class="card bg-white border flex lg:flex-row flex-col items-center lg:items-stretch justify-center">
                <img src="{{ $result['img'] }}" alt=""
                    class="w-[250px] lg:ml-[30px] ml-0 mb-[30px] {{ $kelompok_laporan['hasil']['medal'] == 'nope' ? 'mt-6' : '' }}">
                <div class="card-body lg:flex-1 w-full flex items-center justify-center">
                    <div class="w-full text-justify">
                        {{ $result['message'] }}
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const canvasHasilPenjualan = document.getElementById('grafikHasilPenjualan');

                new Chart(canvasHasilPenjualan, {
                    type: 'bar',
                    data: {
                        labels: JSON.parse('{!! $kelompok_laporan['grafik']['labels'] !!}').reverse(),
                        datasets: [{
                            label: '# Penjualan Bersih',
                            data: JSON.parse('{!! $kelompok_laporan['grafik']['penjualan'] !!}').reverse(),
                            // backgroundColor: '#057aff',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                const canvasNilaiKeuntungan = document.getElementById('grafikNilaiKeuntungan');

                new Chart(canvasNilaiKeuntungan, {
                    type: 'line',
                    data: {
                        labels: JSON.parse('{!! $kelompok_laporan['grafik']['labels'] !!}').reverse(),
                        datasets: [{
                                label: '# Total Penjualan',
                                data: JSON.parse('{!! $kelompok_laporan['grafik']['total_penjualan'] !!}').reverse(),
                                borderColor: '#057aff',
                                borderWidth: 2.5
                            },
                            {
                                label: '# Total Biaya',
                                data: JSON.parse('{!! $kelompok_laporan['grafik']['total_biaya'] !!}').reverse(),
                                borderColor: '#ff4d59',
                                borderWidth: 2.5
                            },
                            {
                                label: '# Nilai Keuntungan',
                                data: JSON.parse('{!! $kelompok_laporan['grafik']['nilai_keuntungan'] !!}').reverse(),
                                borderColor: '#00e0c0',
                                borderWidth: 2.5
                            },
                        ]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

            <div class="card bg-white border">
                <div class="card-body">
                    <button class="btn btn-primary" type="button"
                        x-on:click="() => {
                print = true;
                const content = document.getElementById('yield-content');
                content.style.height = '0px';
                setTimeout(() => {
                    window.print();
                    setTimeout(() => {
                        content.style.height = 'auto';
                        print = false;
                    }, 400);
                }, 400);
            }">Print
                        Laporan</button>

                    <a href="{{ route('admin.kelompok.anggota.sertifikat', $kelompok->id) }}" target="_blank"
                        class="btn btn-primary">Print Sertifikat</a>
                </div>
            </div>
        </div>
        <div x-show="print" class="bg-white fixed top-0 left-0 right-0 bottom-0 p-5 z-[999999999]">
            <div class="mb-5">Laporan Hasil Kegiatan</div>
            <table class="w-full border border-collapse">
                <thead>
                    <tr>
                        <td class="border p-3 uppercase">Waktu</td>
                        <td class="border p-3 uppercase">Jumlah Penjualan</td>
                        <td class="border p-3 uppercase">Harga Jual</td>
                        <td class="border p-3 uppercase">Total Penjualan</td>
                        <td class="border p-3 uppercase">Total Biaya</td>
                        <td class="border p-3 uppercase">Nilai Keuntungan</td>
                        {{-- <td class="border p-3 uppercase">Biaya Tetap</td>
<td class="border p-3 uppercase">Biaya Variabel</td>
<td class="border p-3 uppercase">Biaya Operasional</td>
<td class="border p-3 uppercase">Biaya Non Operasional</td>
<td class="border p-3 uppercase">Biaya Pajak</td> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelompok_laporan['items'] as $item)
                        <tr>
                            <td class="border p-3">
                                {{ $item->tanggal ?: $item->pekan ?: $item->bulan ?: '-' }}</td>
                            <td class="border p-3">{{ $item->penjualan_bersih }}</td>
                            <td class="border p-3">
                                <x-format-money :value="$item->harga_jual_produk"></x-format-money>
                            </td>
                            <td class="border p-3">
                                <x-format-money :value="$item->total_penjualan_bersih"></x-format-money>
                            </td>
                            <td class="border p-3">
                                <x-format-money :value="$item->total_biaya"></x-format-money>
                            </td>
                            <td class="border p-3">
                                <x-format-money :value="$item->nilai_keuntungan_bersih"></x-format-money>
                            </td>
                            {{-- <td class="border p-3">{{ $item->biaya_tetap }}</td>
    <td class="border p-3">{{ $item->biaya_variabel }}</td>
    <td class="border p-3">{{ $item->biaya_operasional }}</td>
    <td class="border p-3">{{ $item->biaya_non_operasional }}</td>
    <td class="border p-3">{{ $item->biaya_pajak }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
    <div class="card bg-white border">
        <div class="card-body">
            <div class="text-center">Kelompok belum melakukan penjualan</div>
        </div>
    </div>
@endif
