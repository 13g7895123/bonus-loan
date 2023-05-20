<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>易速貸</title>

    <link rel="stylesheet" href="./dist/output.css" > 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class='bg-bg_pic bg-fixed relative overflow-y-scroll overflow-x-hidden'>
    <!-- nav -->
    <div class='w-screen h-[100px] fixed bg-white z-10'>
        <div class='h-full flex md:flex justify-between items-center px-3 md:px-10'>
            <div class='md:hidden'></div>
            <div class='text-[#6a6a6a] text-4xl font-extrabold'>
                <img src='./asset/img/logo0520.png' class='w-60 py-2'>
            </div>
            <div id='nav_btn' class='hidden md:flex justify-around'>
                <a href='javascript:void(1)' link='home' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>首頁</a>
                <a href='javascript:void(1)' link='aboutus' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>關於我們</a>
                <a href='javascript:void(1)' link='service' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>服務項目</a>
                <a href='javascript:void(1)' link='contactus' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>聯絡我們</a>
            </div>
            <div id='btn_burger' class='flex md:hidden justify-center items-center'>
                <img src='./asset/img/burger.svg' class='w-10 cursor-pointer'>
            </div>
        </div>   
    </div>
    <div id='top' class='w-screen h-[100px] flex bg-white'></div>
    <!-- mobile right menu -->
    <div id='right_menu' class='w-[350px] h-screen hidden right-0 top-0 pt-10 bg-white z-20 transition ease-in-out delay-300'>
        <img id='right_menu_x' src='./asset/img/x.svg' class='absolute w-10 cursor-pointer right-3'>
        <div class='h-[30vh] flex flex-col justify-around mb-5'>
            <a href='javascript:void(1)' link='home' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>首頁</a>
            <a href='javascript:void(1)' link='aboutus' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>關於我們</a>
            <a href='javascript:void(1)' link='service' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>服務項目</a>
            <a href='javascript:void(1)' link='contactus' class='text-[#6a6a6a] text-xl px-5 cursor-pointer'>聯絡我們</a>
        </div>
        <div class='flex flex-col pl-5'>
            <div class='mb-3'>
                <div class='text-2xl font-extrabold border-b-2 border-slate-500 inline-block'>CONTACT US</div>
            </div>
            <div class='flex'>
                <a href='https://line.naver.jp/ti/p/~0979560990' target='_blank'><img src='./asset/img/line.png' class='w-16 md:w-10 bg-white p-1 rounded-full cursor-pointer mr-3'></a>
                <a href='tel:+886-979560990' target='_blank'><img src='./asset/img/phone.png' class='w-16 md:w-10 bg-white p-1 rounded-full cursor-pointer'></a>
            </div>
        </div>
    </div>
    <!-- picture1 -->
    <div id='home' class='w-screen h-[250px] md:h-[830px] bg-bg_pic bg-cover bg-center relative'>
        <a href='https://line.naver.jp/ti/p/~0979560990' class='w-full h-full cursor-pointer absolute' target='_blank'></a>
    </div>
    <!-- inf1 -->
    <div id='aboutus' class='flex flex-col items-center bg-white pt-16 md:pt-[100px]'>
        <div class='title text-2xl md:text-4xl pb-3'>全台各縣市借錢管道的資訊</div>
        <h5 class='text-lg text-[#737373] text-justify font-bold leading-[170%] px-3'>我們提供小額借款、證件借款、現金週轉、支票貼現、民間借貸等多元選擇，讓您簡單借款！如需詳細資訊，歡迎聯繫我們的客服。</h5>
    </div>
    <!-- icons -->
    <div class='w-screen px-5 pb-[3vw] mx-auto flex flex-col md:flex-row justify-center flex:wrap pt-10 bg-white'>
        <div class='w-[100%] md:w-[50%] flex justify-center md:justify-end'>
            <div class='h-auto md:w-auto md:h-[180px] flex flex-col items-center my-0.5 mx-2.5'>
                <div class='iconbox'>
                    <img src='./asset/img/1.PNG' class='w-[70px]'>
                </div>
                <div class='text-2xl text-[#626262] font-bold mt-2.5'>借錢好幫手</div>
            </div>
            <div class='h-auto md:w-auto md:h-[180px] flex flex-col items-center my-0.5 mx-2.5'>
                <div class='iconbox'>
                    <img src='./asset/img/2.PNG' class='w-[70px]'>
                </div>
                <div class='text-2xl text-[#626262] font-bold mt-2.5'>籌錢好幫手</div>
            </div>
        </div>
        <div class='w-[100%] md:w-[50%] flex justify-center md:justify-start'>
            <div class='h-auto md:w-auto md:h-[180px] flex flex-col items-center my-0.5 mx-2.5'>
                <div class='iconbox'>
                    <img src='./asset/img/3.PNG' class='w-[70px]'>
                </div>
                <div class='text-2xl text-[#626262] font-bold mt-2.5'>理財好幫手</div>
            </div>
            <div class='h-auto md:w-auto md:h-[180px] flex flex-col items-center my-0.5 mx-2.5'>
                <div class='iconbox'>
                    <img src='./asset/img/4.PNG' class='w-[70px]'>
                </div>
                <div class='text-2xl text-[#626262] font-bold mt-2.5'>資訊最齊全</div>
            </div>
        </div>
    </div>
    <!-- form -->
    <div id='contactus' class='w-full flex justify-center py-[2vw] px-[5vw] bg-[#f4f4f4] md:pt-[100px]'>
        <div class='w-[1280px] max-w-full bg-[#f4f4f4] flex flex-wrap p-5'>
            <div class='title w-screen h-20 text-center mb-5'>聯絡我們</div>
            <div class='w-full flex flex-col md:flex-row justify-between'>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>姓名 *</label>
                    <input name='name' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] outline-none rounded-sm' placeholder="請輸入您的姓名">
                </div>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>性別 *</label>
                    <select name='sex' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] bg-white'>
                        <option value='M'>男</option>
                        <option value='F'>女</option>
                    </select>
                </div>
            </div>
            <div class='w-full flex flex-col md:flex-row justify-between'>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>手機 *</label>
                    <input name='phone' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] outline-none rounded-sm' placeholder="請輸入您的手機">
                </div>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>借款金額 *</label>
                    <input name='amount' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] outline-none rounded-sm'>
                </div>
            </div>
            <div class='w-full flex flex-col md:flex-row justify-between'>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>諮詢項目</label>
                    <select name='cate' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] bg-white'>
                        <option>身分證借款</option>
                        <option>小額借款</option>
                        <option>商家週轉金</option>
                        <option>疫情紓困金</option>
                        <option>支票借款</option>
                        <option>民間借整合</option>
                    </select>
                </div>
                <div class='w-full md:w-[45%] flex flex-col md:flex-row mb-[15px]'>
                    <label class='w-[150px] text-xl'>居住地 *</label>
                    <select name='location' class='w-full md:w-[calc(100%-150px)] py-[6px] px-[7px] bg-white'>
                        <option value=''>基隆市</option>
                        <option value=''>台北市</option>
                        <option value=''>新北市</option>
                        <option value=''>桃園縣</option>
                        <option value=''>新竹市</option>
                        <option value=''>新竹縣</option>
                        <option value=''>苗栗縣</option>
                        <option value=''>台中市</option>
                        <option value=''>彰化縣</option>
                        <option value=''>南投縣</option>
                        <option value=''>雲林縣</option>
                        <option value=''>嘉義市</option>
                        <option value=''>嘉義縣</option>
                        <option value=''>台南市</option>
                        <option value=''>高雄市</option>
                        <option value=''>屏東縣</option>
                        <option value=''>台東縣</option>
                        <option value=''>花蓮縣</option>
                        <option value=''>宜蘭縣</option>
                        <option value=''>澎湖縣</option>
                        <option value=''>金門縣</option>
                        <option value=''>連江縣</option>
                    </select>
                </div>
            </div>
            <div class='w-full flex flex-col md:flex-row mb-[15px]'>
                <label class='w-[150px] text-xl'>詳細說明</label>
                <textarea name='remark' class='w-full md:w-[calc(100%-150px)] h-[158px] py-[6px] px-[7px]'></textarea>
            </div>
            <div class='w-full flex justify-center items-center'>
                <div id='btn_submit' class='text-white px-16 py-5 bg-[#f00709] text-2xl font-bold rounded-md cursor-pointer'>立即諮詢</div>
            </div>
        </div>
    </div>
    <!-- inf2 -->
    <div id='service' class='w-full flex justify-center bg-white pt-16 md:pt-[100px]'>
        <div class='w-[95%]'>
            <div class='title w-full flex justify-center mb-10'>服務項目</div>
            <div class='w-[95%] flex flex-wrap mx-auto'>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/5.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>身分證借款</div>
                    <p class='inf2_p'>借款無需限定職業類別，快速放款能即時解決您的資金燃眉之急。我們提供寬鬆的放款條件和絕對保密的安全保障，無論您的信用紀錄是否有瑕疵、協商或遲繳都可以申請。立即向我們諮詢，我們將為您度身打造最適合您的借款方案。</p>
                </div>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/6.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>小額借款</div>
                    <p class='inf2_p'>我們提供小額借款，無論您的職業類別是什麼，都可以申請。我們快速放款，讓您即時緩解燃眉之急。申請只需30分鐘，快速審核放款，也可選擇身分證借款等多種貸款服務，給您更多的選擇。我們的貸款服務能讓您安心借款，讓您更有信心面對未來。</p>
                </div>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/7.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>商家週轉金</div>
                    <p class='inf2_p'>商家運營時常遇到資金短缺的情況，這時準備好的週轉金就能夠協助您渡過難關。由於這種情況通常十分緊急，我們提供輕鬆貸款，讓您能夠快速取得所需資金，無需擔心因緊急情況而無法及時籌措資金。</p>
                </div>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/8.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>疫情紓困金</div>
                    <p class='inf2_p'>為因應疫情帶來的影響，我們特別針對受疫情衝擊的勞工、產業和企業提供疫情紓困金。我們的紓困計劃包含「發放現金、提供貸款、減輕負擔」三個方面，擴大了紓困對象，簡化了申請流程。我們的勞工紓困貸款不受勞保限制，讓更多的人能夠受惠。</p>
                </div>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/9.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>支票借款</div>
                    <p class='inf2_p'>我們提供支票借款服務，讓您能夠快速地將支票轉換為現金，無論您是個人戶還是公司戶，無論支票期限長短，我們都能全額貼現，避免您需要繁瑣的銀行手續。我們還能代替錢莊和當舖提供貼現服務，讓您在資金運用上更加省心省力。</p>
                </div>
                <div class='w-[50%] md:w-[33.3%] flex flex-col items-center my-[40px]'>
                    <div class='w-[100px] h-[100px] flex justify-center items-center mb-5'>
                        <img src='./asset/img/10.PNG' class='w-[100px] h-auto'>
                    </div>
                    <div class='text-xl text-[#4d4d4d] font-semibold mb-10'>民間借款整合</div>
                    <p class='inf2_p'>我們提供民間借款整合服務，無論您的個人條件如何，我們都能免徵信和免保人，快速放款並且沒有區域限制。我們的民間貸款服務讓您靈活取得資金，申辦流程簡便，且核貸速度快，避免了銀行高門檻和錢莊高利息的問題。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- textinfo -->
    <div class='py-[5vw] flex flex-col justify-center items-center bg-opacity-50 bg-slate-700'>
        <div class='text-xl md:text-3xl text-[#d6ae78] font-extrabold text-justify px-3'>全台皆可服務，周轉不求人，線上加入諮詢。免聯徵，免保人個資絕對保密。</div>
        <!-- <div class='flex mt-5'>
            <a href='https://line.naver.jp/ti/p/~0979560990' target='_blank'><div class='w-44 px-5 py-3 mx-3 text-[#eadcc8] bg-[#7b7a61] flex justify-center items-center cursor-pointer rounded-full'>LINE線上客服</div></a>
            <a href='tel:+886-979560990' target='_blank'><div class='w-44 px-5 py-3 mx-3 text-[#eadcc8] bg-[#c39866] flex justify-center items-center cursor-pointer rounded-full'>立即來電</div></a>
        </div> -->
    </div>
    <!-- footer -->
    <div class='h-42 w-screen bg-[#f08b33] flex flex-col md:flex-row items-center justify-around pb-5 md:pb-0'>
        <!-- logo -->
        <!-- <div class=''>
            <img src='./asset/img/logo0520.png' class=' w-72 px-10'>            
        </div> -->
        <!-- contact us -->
        <div class='text-xl text-white font-bold flex flex-col justify-center md:flex-row md:items-center px-5 md:border-x-4 border-white'>
            <div class='border-b-4 md:border-none mb-3 md:mb-0 border-white text-2xl'>CONTACT US</div>
            <div class='flex items-center'>
                <a href='https://line.naver.jp/ti/p/~0979560990' target='_blank'><img src='./asset/img/line.png' class='w-16 md:w-10 bg-white p-1 rounded-full cursor-pointer mx-3'></a>
                <a href='tel:+886-979560990' target='_blank'><img src='./asset/img/phone.png' class='w-16 md:w-10 bg-white p-1 rounded-full cursor-pointer'></a>
            </div>
        </div>
    </div>
    <!-- mobile footer btn -->
    <div class='w-screen h-[52px] md:hidden bg-white'></div>
    <div class='w-screen h-[52px] fixed flex bottom-0 md:hidden'>
        <a href='tel:+886-979560990' target='_blank' class='w-1/2 flex justify-center items-center py-3 font-bold border-2 border-white bg-[#2196f3] cursor-pointer text-white text-xl'>立即來電</a>
        <a href='https://line.naver.jp/ti/p/~0979560990' target='_blank' class='w-1/2 flex justify-center items-center py-3 font-bold border-2 border-white bg-green-500 cursor-pointer text-white text-xl'>加入好友</a>
    </div>
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./Pages/js/index.js"></script>   
    <script>$(document).ready(() => {})</script>    
</body>
</html>