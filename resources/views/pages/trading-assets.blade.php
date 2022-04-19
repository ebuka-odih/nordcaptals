@extends('pages.layout.app')
@section('content')


<div class="main-home-content">
    <div class="current-page h1">
        <div class="wrap"> Trading platform </div>
    </div>
    <div class="secondary-nav">
        <ul class="sn-menu wrap">
            <li class="snm-item"><a href="platform.html" class="snmi-link">Platform</a></li>
            <li class="snm-item active"><a href="trading-assets.html" class="snmi-link">Trading Assets</a></li>
        </ul>
    </div>
    <section class="wrap b-content">
        <div class="h1 text-centered">Trading Assets</div>
        <h1 class="hide">CFD Trading Assets</h1>
        <div class="b-tabs">
            <div class="bt-list">
                <a data-tab="#tab-1" href="javascript:;" class="js-tab btl-item active"> <span class="btli-arrow-s"></span> STOCKS </a>
                <a data-tab="#tab-2" href="javascript:;" class="js-tab btl-item"> <span class="btli-arrow-s"></span> CURRENCIES </a>
                <a data-tab="#tab-3" href="javascript:;" class="js-tab btl-item"> <span class="btli-arrow-s"></span> COMMODITIES </a>
                <a data-tab="#tab-4" href="javascript:;" class="js-tab btl-item"> <span class="btli-arrow-s"></span> INDICES </a>
            </div>
            <div id="tab-1" class="js-pane bt-pane active">
                <!--<div class="b-accordion">
        <a href="javascript:;" class="ba-header js-toggle">ROLLS ROYCE (LONDON)</a>
        <div class="ba-content js-toggle-target">
            <p>Rolls-Royce plc (LSE: RR.) is a British aircraft engine maker, and the second-largest in the world, behind GE Aviation. The company has related businesses in the defense aerospace, marine and energy markets.
Rolls-Royce was nationalized in 1971, by which time aircraft engines had long been the most significant part of the business. The automobile company was separated in 1973 and the present Rolls-Royce plc was re-privatized in 1987. Rolls-Royce is, through its defense aerospace division, the world’s 16th largest defense contractor. Defense aerospace sales accounted for 21% of group sales in 2005, civil aerospace 53%, marine 17% and energy 8%. It is listed on the London Stock Exchange and is a constituent of the FTSE 100 Index.</p>

            <table class="bac-table">
                <tr>
                    <th>Trading hours:</th>
                    <td>Mon – Fri 8:30 – 16:00</td>
                </tr>
                <tr>
                    <th>Reuters Code:</th>
                    <td>RR.L</td>
                </tr>
                <tr>
                    <th>Expiry Rule:</th>
                    <td>(Bid + Ask) / 2</td>
                </tr>
            </table>
        </div>
    </div>-->
                <!--<div class="b-accordion">
        <a href="javascript:;" class="ba-header js-toggle">BAE SYSTEMS (LONDON)</a>
        <div class="ba-content js-toggle-target">
            <p>BAE Systems plc is a British defense, security and aerospace company headquartered in Farnborough, Hampshire, England, that has global interests, particularly in North America through its subsidiary BAE Systems Inc. BAE is the world’s second-largest defense contractor and the largest in Europe. It was formed on 30 November 1999 by the £7.7 billion merger of two British companies, Marconi Electronic Systems (MES), the defence electronics and naval shipbuilding subsidiary of the General Electric Company plc (GEC), and the aircraft, munitions and naval systems manufacturer British Aerospace (BAE).</p>

            <table class="bac-table">
                <tr>
                    <th>Trading hours:</th>
                    <td>Mon – Fri 8:30 – 16:00</td>
                </tr>
                <tr>
                    <th>Reuters Code:</th>
                    <td>BAES.L</td>
                </tr>
                <tr>
                    <th>Expiry Rule:</th>
                    <td>(Bid + Ask) / 2</td>
                </tr>
            </table>
        </div>
    </div> -->
                <!--	<div class="b-accordion">
        <a href="javascript:;" class="ba-header js-toggle">REUTERS (US THOMSON REUTERS)</a>
        <div class="ba-content js-toggle-target">
            <p>Reuters Group Limited  is a UK-based, Canadian company. This news company provides information about financial markets  from around the world to newspapers and broadcasters. Its main focus is on supplying the financial markets with information and trading products. This includes market data, such as share prices and currency rates, research and analysis, as well as trading systems that allow dealers to buy and sell such assets as currencies and shares on a computer screen instead of by telephone or on a trading floor like that of the New York Stock Exchange. Competitors include Bloomberg L.P. and Dow Jones Newswires. It is now a part of Thomson Reuters.</p>

            <table class="bac-table">
                <tr>
                    <th>Trading hours:</th>
                    <td>Mon – Fri from 14:00-20:00GMT</td>
                </tr>
                <tr>
                    <th>Reuters Code:</th>
                    <td>TRI.N</td>
                </tr>
                <tr>
                    <th>Expiry Rule:</th>
                    <td>(Bid + Ask) / 2</td>
                </tr>
            </table>
        </div>
    </div> -->
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">IBM</a>
                    <div class="ba-content js-toggle-target">
                        <p>International Business Machines (IBM) (NYSE: IBM) is an American multinational technology and consulting firm headquartered in Armonk, New York. IBM manufactures and sells computer hardware and software, and it offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri from 13:40 – 20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NISSAN MOTOR</a>
                    <div class="ba-content js-toggle-target">
                        <p>Nissan Motor Company Ltd usually shortened to Nissan (play /ˈniːsɑːn/ or UK /ˈnɪsæn/; Japanese: [nisːaɴ]), is a multinational automaker headquartered in Japan. It was formerly a core member of the Nissan Group, but has become more independent after its restructuring under Carlos Ghosn (CEO).t formerly marketed vehicles under the “Datsun” brand name and is one of the largest car manufacturers in the world. As of 2011, the company’s global headquarters is located in Nishi-ku, Yokohama. In 1999, Nissan entered a two way alliance with Renault S.A. of France, which owns 43.4% of Nissan while Nissan holds 15% of Renault shares, as of 2008. The current market share of Nissan, along with Honda and Toyota, in American auto sales represent the largest of the automotive firms based in Asia that have been increasingly encroaching on the historically dominant US-based “Big Three” consisting of GM, Ford and Chrysler. In its home market, Nissan is the third largest car manufacturer, with Honda being second by a small margin of 2,000 units and Toyota in a very dominant first. Along with its normal range of models, Nissan also produces a range of luxury models branded as Infinity.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Tue – Thu,Fri 00:15-02:00 & 03:30-06:00 GMT</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>NISSAN</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TEVA PHARMA</a>
                    <div class="ba-content js-toggle-target">
                        <p>Teva Pharmaceutical Industries Ltd. NASDAQ: TEVA is an international pharmaceutical company headquartered in Petah Tikva, Israel. It specializes in generic and proprietary pharmaceuticals and active pharmaceutical ingredients. It is the largest generic drug manufacturer in the world and one of the 15 largest pharmaceutical companies worldwide.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Thu from 07:15-14:00 </td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TEVA.TA</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TESCO</a>
                    <div class="ba-content js-toggle-target">
                        <p>Tesco plc (LSE: TSCO) is a global grocery and general merchandising retailer headquartered in Cheshunt, United Kingdom.It is the third-largest retailer in the world measured by revenues (after Wal-Mart and Carrefour) and the second-largest measured by profits (after Wal-Mart). It has stores in 14 countries across Asia, Europe and North America and is the grocery market leader in the UK (where it has a market share of around 30%), Malaysia, the Republic of Ireland and Thailand.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri from 07:15-15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TSCO.L</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TURKCELL (TURKEY)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Turkcell (NYSE: TKC) is the leading mobile phone operator of Turkey, based in Istanbul. The company has 36.3 million subscribers by the end of September 2008, making it the third biggest in Europe. Turkcell is traded both at the Turkish Stock Exchange and the NYSE. Raceoption enables trading on the Turkcell stock both in the Turkish Exchange and in the NYSE.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri from 12:00 – 13:50</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TCELL.IS</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TATA MOTORS (INDIA)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Tata Motors Limited (NSE: TATAMOTORS, BSE: 500570, NYSE: TTM), is a multinational corporation headquartered in Mumbai, India. Part of the Tata Group, it was formerly known as TELCO (TATA Engineering and Locomotive Company). Tata Motors has a consolidated revenue of USD 16 billion after the acquisition of British automotive brands Jaguar and Landrover in 2008. It is India’s largest company in the automobile and commercial vehicle sector with upwards of 70% cumulative Market share in the Domestic Commercial vehicle segment, and a midsized player on the world market with 0.81% market share in 2007 according to OICA data. The OICA ranked it as the 19th largest automaker, based on figures for 2007. Tata Motors is a dual-listed company traded on both the Bombay Stock Exchange, as well as on the New York Stock Exchange. Tata Motors in 2005, was ranked among the top 10 corporations in India with an annual revenue exceeding INR 320 billion.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 4:30 – 10:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TAMO.BO</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">HSBC HOLDINGS (LONDON)</a>
                    <div class="ba-content js-toggle-target">
                        <p>HSBC Holdings plc is a public limited company incorporated in England and Wales in 1990, and headquartered in London since 1993. As of 2009, it is both the world’s largest banking group and the world’s 6th largest company according to a composite measure by Forbes magazine. The group was founded from The Hongkong and Shanghai Banking Corporation based in Hong Kong, the acronym of which led to the current name. Today, whilst no single geographical area dominates the group’s earnings, Hong Kong still continues to be a significant source of its income. Recent acquisitions and expansion in China are returning HSBC to part of its roots.HSBC has an enormous operational base in Asia and significant lending, investment, and insurance activities around the world. The company has a global reach and financial fundamentals matched by few other banking or financial multinationals. HSBC is listed on the London, New York, Hong Kong, Paris and Bermuda Stock Exchanges, and is a constituent of the FTSE 100 Index and the Hang Seng Index.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:15 – 15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>HSBA.L</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">COCA COLA (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Coca-Cola is a carbonated soft drink sold in stores, restaurants and vending machines internationally. The Coca-Cola Company claims that the beverage is sold in more than 200 countries. It is produced by The Coca-Cola Company in Atlanta, Georgia, and is often simply referred to as Coke or Cola. Originally intended as a patent medicine when it was invented in the late 19th century by John Pemberton, Coca-Cola was bought out by businessman Asa Griggs Candler, whose marketing tactics led Coke to its dominance of the world soft-drink market throughout the 20th century. Coca Cola like the famous brand McDonald is considered a symbol of US capitalism and culture.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>COKE</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SBERBANK (RUSSIA)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Sberbank Rossii (MICEX:SBER RTS:SBER) ( “Savings Bank of the Russian Federation”) is the largest bank in Russia and Eastern Europe. The company’s headquarters are in Moscow and its history goes back to the financial reform of 1841. In many regions, Sberbank is practically the only bank capable of providing local administrations with complex banking services and rendering significant financial support in implementing investment and social programs.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>SBER03.MM</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">LUKOIL (RUSSIA)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Lukoil (RTS:LKOH LSE: LKOD NASDAQ: LUKOY) is Russia’s largest oil company and its largest producer of oil. In 2007, the company produced 96.645 million tons of oil; 1.953 million barrels per day. Its international upstream subsidiary is called Lukoil Overseas Holding. Headquartered in Moscow, Lukoil is the second largest public company (next to Exxon Mobil) in terms of proven oil and gas reserves. In 2008, the company had 19.3 billion barrels of oil equivalent per SPE standards. This accounts to some 1.3% of global oil reserves. The company has operations in more than 40 countries around the world.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>LKOH.MM</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BP (BRITISH PETROLEUM)</a>
                    <div class="ba-content js-toggle-target">
                        <p>BP plc is the third largest global energy company, the 5th largest company in the world and UK’s largest company, with headquarters in St James’s, City of Westminster, London. The company is among the largest private sector energy corporation in the world, and one of the six “supermajors” (vertically integrated private sector oil exploration, natural gas, and petroleum product marketing companies). The Company is listed on the London Stock Exchange and is a constituent of the FTSE 100</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:15 – 15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>BP.L</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GAZPROM (RUSSIA)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Gazprom (English: Open Joint Stock Company “Gazprom”) is the largest extractor of natural gas in the world and the largest Russian company. Gazprom was created in 1989 when the Ministry of Gas Industry of the Soviet Union transformed itself into a corporation, keeping all its assets intact. The company was later privatized in part, but currently the Russian government holds a controlling stake. In 2008, the company produced 549.7 billion cubic meters of natural gas, amounting to 17% of the worldwide gas production. In addition, the company produced 32 million tons of oil and 10.9 million tons of gas. Gazprom’s activities accounted for 10% of Russia’s gross domestic product in 2008.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>GAZP.MM</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NIKE (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Nike, Inc. is a major publicly traded sportswear and equipment supplier based in the United States. It is the world’s leading supplier of athletic shoes and apparel and a major manufacturer of sports equipment with revenue in excess of $18.6 billion USD in its fiscal year 2008 . As of 2008, it employed more than 30,000 people worldwide. The company was founded on January 25, 1964 as Blue Ribbon Sports by Bill Bowerman and Philip Knight, and officially became Nike, Inc. in 1978. The company takes its name from Nike (Greek Νίκη pronounced [níːkɛː]), the Greek goddess of victory; it is also based on Egyptian usage of “strength”, “victory”, nakht. Nike markets its products under its own brand as well as Nike Golf, Nike Pro, Nike+, Air Jordan, Nike Skateboarding and subsidiaries including Cole Haan, Hurley International, Umbro and Converse. In addition to manufacturing sportswear and equipment, the company operates retail stores under the Niketown name.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>NKE</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">APPLE (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Apple Inc. is an American multinational corporation that designs and manufactures consumer electronics and computer software products. The company’s best-known hardware products include Macintosh computers, the iPod and the iPhone. Apple software includes the Mac OS X operating system, the iTunes media browser, the iLife suite of multimedia and creativity software, the iWork suite of productivity software, Final Cut Studio, a suite of professional audio and film-industry software products, and Logic Studio, a suite of audio tools. The company operates more than 250 retail stores in nine countries and an online store where hardware and software products are sold.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>AAPL.O</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MICROSOFT (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Microsoft Corporation is a multinational computer technology corporation that develops, manufactures, licenses, and supports a wide range of software products for computing devices. Its most profitable products are the Microsoft Windows operating system and the Microsoft Office suite of productivity software. The company was founded to develop and sell BASIC interpreters for the Altair 8800. Microsoft rose to dominate the home computer operating system market with MS-DOS in the mid-1980s, followed by the Windows line of operating systems. Its products have all achieved near-ubiquity in the desktop computer market. When the company debuted its IPO in March 13, 1986, the stock price was US $21. By the end of the first trading day, the stock had closed at $28.The stock price peaked in 1999 at around US $119. In the last few years, the price of Microsoft’s stock largely remained steady, with a rise in stock price around the release of Windows Vista and a fall during the economic crisis of 2008.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>MSFT.O</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CITI (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Citigroup Inc. (branded Citi), is a major American financial services company based in New York. Citigroup was formed from one of the world’s largest mergers in history by combining the banking giant Citicorp and financial conglomerate Travelers Group on April 7, 1998. Citigroup Inc. has the world’s largest financial services network, spanning 140 countries with approximately 16,000 offices worldwide and employs approximately 322,000 staff around the world. It is the world’s largest bank by total customers & worldwide branch network as of 2009. It is a primary dealer in US Treasury securities. Citigroup suffered huge losses during the global financial crisis of 2008 and was rescued in November 2008 in a massive bailout by the U.S. government.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>NOEC</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ALPHABET Inc C (Google)</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40 – 20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">F BP</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:01-00:02</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">S.BANK INDIA</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:45-10:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EXXON MOBIL</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BAIDU</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AMAZON</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">DISNEY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GOLDMAN SACHS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">INTEL</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">JP MORGAN CHASE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">PFIZER</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CATERPILLAR</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BANCO SANTANDER</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TELEFONICA</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BANK OF AMERICA</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AIG</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">YAHOO</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NETFLIX</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">McDONALD'S</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ANZ BANK</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:05:00-05:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BHP-AU</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:05:00-05:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">RIO-AU</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:05:00-05:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">LAS VEGAS SANDS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">WYNN RESORTS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EBAY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SONY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BOEING</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">WAL-MART</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GENERAL MOTORS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GROUPON</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MASTERCARD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SALESFORCE.COM</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">STARBUCKS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AXIS BANK</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:00-10:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TATA STEEL</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:00-10:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ROSNEFT'</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ROSNEFT'</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FACEBOOK</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">YANDEX N.V</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CK HUTCHISON</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 01:40-04:00,05:30-08:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BLACKBERRY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">3M</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TENCENT HOLDINGS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 01:40-04:00,05:30-08:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TWITTER</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MICRON</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SINA</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TESLA MOTORS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">WEIBO</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">VTB BANK</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:10-14:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ALIBABA</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GENERAL ELECTRIC</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">JOHNSON & JOHNSON</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MAZDA MOTOR</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Tue – Fri 00:05:00-02:30:00,03:35:00-06:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TOSHIBA CORP</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Tue – Fri 00:05:00-02:30:00,03:35:00-06:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SUMITOMO MITSUI</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Tue – Fri 00:05:00-02:30:00,03:35:00-06:00:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TOYOTA (US)</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">COLGATE-PALMOLIVE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FERRARI</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">LLOYDS BANK</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BARCLAYS</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BRITISH AMERICAN T</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">VODAFONE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">RIO TINTO</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CARNIVAL CRUZE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/USD</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the Euro and the United States Dollar.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Fri 00:00 – 23:59</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>EUR=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/USD</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the British Pound currency and the United States Dollar currency</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 02:00:00-21:00:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>GBP=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the United States Dollar currency and the Japanese yen currency</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Fri 00:00:00-23:59:59</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>JPY=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/CAD</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the United States Dollar currency and the Canadian Dollar currency</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 03:00:00-20:00:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>CAD=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the Euro and the Japanese Yen.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Fri 00:00 – 23:59</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>EURJPY=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/GBP</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the Euro and the British Pound.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:00 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>EURGBP=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/TRY</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the United States Dollar currency and the Turkish New Lira currency.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:00 – 15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TRY=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/RUB</a>
                    <div class="ba-content js-toggle-target">
                        <p>he exchange rate of the United States Dollar and the Russian Ruble.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:00 – 15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>RUB=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/ZAR</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the United States Dollar and the South African Rand.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:00 – 14:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>ZAR=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/SGD</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange rate of the United States Dollar and the Singapore Dollar.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 1:00 – 9:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>SGD=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NZD/USD</a>
                    <div class="ba-content js-toggle-target">
                        <p>The exchange level of the the New Zealand Dollar and the United States Dollar.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Thu 00:00 – 23:59</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>NZD=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/CHF</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:00 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>CHF=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/USD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Fri 00:00 – 23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/RUB</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:40-17:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/RUB</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:00-15:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/CHF</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:00-19:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/CHF</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:00-19:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/CAD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 08:00-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CAD/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:00-21:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/NZD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/AUD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/CAD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 08:00-21:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NZD/JPY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:30-05:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/CAD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 06:00-21:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/NZD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/CHF</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:00-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BitCOin/USD</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BitCoin/CNY</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Tue – Fri 00:00-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">AUD/USD FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/JPY FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">USD/JPY FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GBP/USD FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">EUR/USD FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SILVER</a>
                    <div class="ba-content js-toggle-target">
                        <p>Silver, in the form of electrum (a gold-silver alloy), was coined to produce money in around 700 BCE by the Lydians. Later, silver was refined and coined in its pure form. Many nations used silver as the basic unit of monetary value. In the modern world, silver bullion has the ISO currency code XAG. The name of the United Kingdom monetary unit “pound” reflects the fact that it originally represented the value of one troy pound of sterling silver. In the 1800s, many nations, such as the United States and Great Britain, switched from silver to a gold standard of monetary value, then in the 20th century to fiat currency. Much like gold, it is considered to be a natural hedge against inflation and in the last few years was highly correlated with world growth.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>XAG=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">PLATINUM</a>
                    <div class="ba-content js-toggle-target">
                        <p>Platinum is a chemical element with the chemical symbol Pt and an atomic number of 78. Platinum is used in jewelry, laboratory equipment, electrical contacts and electrodes, platinum resistance thermometers, dentistry equipment, and catalytic converters. Platinum bullion has the ISO currency code of XPT. Platinum is a commodity with a value that fluctuates according to market forces. On June 5, 2009, Platinum was worth $1263.00 per troy ounce (approximately $40.09 per gram).</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:00-07:01</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>XPT=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">OIL (LIGHT SWEET CRUDE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Sweet crude oil is a type of petroleum. Petroleum is considered “sweet” if it contains less than 0.5% sulfur, compared to a higher level of sulfur in sour crude oil. Sweet crude oil contains small amounts of hydrogen sulfide and carbon dioxide. High quality, low sulfur crude oil is commonly used for processing into gasoline and is in high demand, particularly in the industrialized nations. “Light sweet crude oil” is the most sought-after version of crude oil as it contains a disproportionately large amount of these fractions that are used to process gasoline, kerosene, and high-quality diesel. The term “sweet” originated because the low level of sulfur provides the oil with a mildly sweet taste and pleasant smell. Nineteenth century prospectors would taste and smell small quantities of the oil to determine its quality. This type of oil is considered a benchmark for oil and is traded at the Chicago Mercantile Exchange. The oil is considered a natural hedge against inflation as in the last few years was highly correlated with the world’s growth.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 05:00-19:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>CLC1</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Sugar</a>
                    <div class="ba-content js-toggle-target">
                        <p>The sugar is one of the world’s leading sweeteners, mainly produced in Brazil. There are many types of sugars which all are rated by the ICUMSA (international commission uniform methods of sugar analysis), at our platform the sugar is traded as quoted and cleared by the CME group. The future contracts are dollar dominated and represent the price of sugar for 112,000 units. In our platform the nearest future is traded out of the possible tradable contracts (which are March, May, July and October).</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 10:00-17:30</td>
                            </tr>
                            <tr>
                                <th>CME symbol:</th>
                                <td>YO.</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Coffee</a>
                    <div class="ba-content js-toggle-target">
                        <p>One of the world’s most popular drinks, it is assumed that 80% of adults drink some sort of coffee or a derivative of coffee at list once a day. Like many other soft commodities Brazil is the largest producer of coffee. The future contracts are dollar dominated and represent the price of sugar for 37,500 pounds. In our platform the nearest future is traded out of the possible tradable contracts (which are March, May, July September and December).</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 10:00-17:30</td>
                            </tr>
                            <tr>
                                <th>CME symbol:</th>
                                <td>KT.</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GOLD/EUR</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 04:00-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GOLD</a>
                    <div class="ba-content js-toggle-target">
                        <p>Historically gold coinage was widely used as currency; When paper money was introduced, it typically was a receipt redeemable for gold coin or bullion. In an economic system known as the gold standard, a certain weight of gold was given the name of a unit of currency. For a long period, the United States government set the value of the US dollar so that one troy ounce was equal to $20.67 ($664.56/kg), but in 1934 the dollar was devalued to $35.00 per troy ounce ($1125.27/kg). By 1961 it was becoming hard to maintain this price, and a pool of US and European banks agreed to manipulate the market to prevent further currency devaluation against increased gold demand. On March 17, 1968, economic circumstances caused the collapse of the gold pool, and a two-tiered pricing scheme was established whereby gold was still used to settle international accounts at the old $35.00 per troy ounce ($1.13/g) but the price of gold on the private market was allowed to fluctuate; this two-tiered pricing system was abandoned in 1975 when the price of gold was left to find its free-market level Today Gold is considered to be a natural hedge against world inflation and in the last few years together with crude prices and other metals, was highly correlated with world global growth, especially in emerging markets.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 00:00-20:00 GMT</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>XAU=</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GOLD FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59 GMT</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">OIL FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun,Fri,Sat 00:00-23:59 GMT</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">DOW (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Traded on the NYSE (New York Stock Exchange) the Dow Jones Industrial Average (i.e. Industrial Average, Dow Jones, Dow 30, or Dow) compiles the index to gauge the performance of the industrial sector within the American economy.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40 – 20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.DJI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">S&P 500 (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Traded on the CME (Chicago Mercantile Exchange), Standard & Poors is a value-weighted index of 500 large-cap common stocks actively traded in the United States. The stocks included in the S&P are those of large publicly held companies that trade on either of the two largest American stock market companies: the NYSE Euronext and the NASDAQ OMX.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.SPC1</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NASDAQ (US)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Nasdaq Composite is a stock market index of all of the common stocks and similar securities listed on the NASDAQ stock market, meaning that it has over 3,000 components. It is highly regarded in the U.S. as an indicator of the performance of stocks of technology companies and growth companies. Since American and non-American companies are listed on the NASDAQ stock market, the index is not exclusively a U.S. index.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 13:40-20:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.IXIC</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">DAX (GERMANY)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The DAX (Deutscher Aktien IndeX, formerly Deutscher Aktien-Index (German stock index)) is a blue chip stock market index consisting of the 30 major German companies trading on the Frankfurt Stock Exchange. The DAX index includes stocks such as Adidas, Deutsche Bank and Bayer.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:15 – 18:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.GDAXI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CAC (FRANCE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The CAC 40 (Cotation Assistee en Contionu – Continuous Assisted Quotation) is a benchmark French stock market index. The index represents a capitalization-weighted measure of the 40 most significant values among the 100 highest market caps on the Paris Bourse (now Euronext Paris). The CAC 40 Includes companies such as BNP Paribas, Renault, L’Oreal and France Telecom.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:15 – 15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.FCHI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FTSE 100 (UK)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The FTSE 100 Index — also called FTSE 100, FTSE, or, informally, the “footsie” is a share index of the 100 most highly capitalized UK companies listed on the London Stock Exchange. Because the FTSE includes large international companies such as HSBC, BP, Vodafone and Unilever it is considered to be a Global Index and as such is followed by investors worldwide.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:15-15:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.FTSE</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ISE 30 (ISTANBUL STOCK EXCHANGE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Istanbul Stock Exchange (ISE) is the only corporation in Turkey for securities exchange established to provide trading in equities, bonds and bills, revenue-sharing certificates, private sector bonds, foreign securities and real estate certificates as well as international securities. ISE is home to 320 national companies. Local trading hours are 09:30-12:00 for the first session and 14:00-17:00 for the second session, on workdays. All ISE members are incorporated banks and brokerage houses.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 7:00 – 9:00 and 11:10 – 13:50</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.XU030</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">RTS (RUSSIAN TRADING SYTEM)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Russian Trading System is a stock market established in 1995 in Moscow, consolidating various regional trading floors into one exchange. The RTS Index (RTSI) is an index of 50 Russian stocks (as of March 15th, 2007) that trade on the RTS Stock Exchange in Moscow. The Index includes GAZPROM and SBERBANK, VOLGA TELECOM and NOVATEK.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Fri 07:05-20:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.IRTS</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MSM 30 (OMAN)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Muscat Securities Market (MSM) is the principal stock exchange of Oman. It is located in Muscat and it was founded in 1988.The principal stock index at the MSM is the MSM-30. The MSM-30 (also known as the Muscat Securities Market Index) was established in 1992. The composition of the index by sector is as follows: Banks & Investment Sector: 69 companies Industry Sector: 89 companies Service : 61 companies. The Index includes stocks such as DHOFAR BANK and NATIONAL BANK OF OMAN</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Thu 6:30 – 8:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.MSI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TADAWUL (SAUDI STOCK EXCHANGE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Saudi Stock Exchange or Tadawul is the only stock exchange in Saudi Arabia. The Capital Market Authority supervises the exchange. The Tadawul All-Share Index (TASI) reached its highest point at 20,634.86 on 25 February 2006 . It lists 115 publicly traded companies (as of April 30th 2008).</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Mon – Wed 07:10-12:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.TASI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">DUBAI (DUBAI FINANCIAL MARKET GENERAL INDEX)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Dubai Financial Market is a stock exchange located in Dubai, United Arab Emirates. It was founded on March 26, 2000. There are about 57 companies listed (as of August 2007) on DFM, most of them are UAE-based companies and a few dual listings for companies based in other MENA region countries. During 2004 and 2005, there were significant increases in the volume of shares traded and the share prices of many companies. However, towards the end of 2005 and through the first few months of 2006 the bubble burst and share values dropped by around 60% on DFM, along with similar decreases in most other Persian Gulf stock markets. The DFM index includes stocks such as DUBAI ISLAMIC BANK and the EMIRATES TELECOMUNICATION COMPANY.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading hours:</th>
                                <td>Sun – Thu 06:30-10:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.DFMGI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">KUWAIT (KUWAIT GENERAL INDEX)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Kuwait Stock Exchange (KSE) is the national stock market of The State of Kuwait. Although several share holding companies (such as NBK in 1952) existed in Kuwait prior to the creation of the KSE, it was not until October 1962 that a law was passed to organize the country's stock market. The Kuwait Stock Exchange is also among the first and largest stock exchanges in the Persian Gulf region, and is now gaining prominence as one of the most potentially important in the world.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Sun - Thu 6:20 - 9:20</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.KWSE</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">BOMBAY SE</a>
                    <div class="ba-content js-toggle-target">
                        <p>Representing a fast growing economy of India, the BSE Sensex or Bombay Stock Exchange Sensitive Index is a value-weighted index composed of 30 stocks of the largest and most actively traded stocks, representative of various sectors, on the Bombay Stock Exchange. These companies account for around one-fifth of the market capitalization of the BSE. The index has increased by over ten times from June 1990 to the present. The long-run rate of return on the BSE Sensex works out to be 18.6% per annum, which translates to roughly 9% per annum after compensating for inflation. The index includes stocks such as TATA MOTORS and HDFC BANK.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 4:15 - 10:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.BSESN</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">HANG SENG (HONG KONG)</a>
                    <div class="ba-content js-toggle-target">
                        <p>HSI was started on November 24, 1969, and is currently compiled and maintained by HSI Services Limited. It is a subsidiary of Hang Seng Bank, the largest bank registered and listed in Hong Kong in terms of market capitalisation. It is responsible for compiling, publishing and managing the Hang Seng Index.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:30-04:00,05:10-08:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.HSI</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SSE180 (SHANGHAI STOCK EXCHANGE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>Traded in the Shanghai stock exchange,the SSE Composite Index (also known as Shanghai Composite) is the most commonly used indicator to reflect SSE's market performance. Constituents for the SSE Composite Index are all listed stocks (A shares and B shares) at the Shanghai Stock Exchange. The SSE180 reflects the largest 180 stocks in the SSE general index and it includes stocks such as BANK OF CHINA and AIR CHINA.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:40-03:30,05:05-07:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.SSE180</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">KL FUTURE</a>
                    <div class="ba-content js-toggle-target">
                        <p>The Kuala Lumpur Composite Index is a capitalization-weighted stock market index introduced in 1986. The FTSE Bursa Malaysia comprises the largest 30 companies listed on the Malaysian Main Market by full market capitalisation that meet the eligibility requirements of the FTSE Bursa Malaysia Index Ground Rules.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:00-04:30,07:00-09:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>KLIc1</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>(Bid + Ask) / 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NIKKEI225（JPN）</a>
                    <div class="ba-content js-toggle-target">
                        <p>Nikkei 225 , more commonly called the Nikkei, the Nikkei index, or the Nikkei Stock Average. is a stock market index for the Tokyo Stock Exchange (TSE). It has been calculated daily by the Nihon Keizai Shimbun (Nikkei) newspaper since 1950. It is a price-weighted average (the unit is yen), and the components are reviewed once a year. Currently, the Nikkei is the most widely quoted average of Japanese equities, similar to the Dow Jones Industrial Average. In fact, it was known as the "Nikkei Dow Jones Stock Average" from 1975 to 1985.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Tue,Wed,Fri 00:05-02:30,03:35-06:00</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>N225</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TEL AVIV 25</a>
                    <div class="ba-content js-toggle-target">
                        <p>The TA-25 Index is the TASE's flagship index. It was first published in 1992 under the name "MA'OF Index". The TA-25 index tracks the prices of the shares of the 25 companies with the highest market capitalization on the exchange. It serves as an underlying asset for options and futures, Index-Linked Certificates and Reverse Certificates traded on the exchange and worldwide. The index also began on 1 January 1992 with a base level of 100.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Sun - Thu 07:15-14:00 GMT</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TA25</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TOPIX</a>
                    <div class="ba-content js-toggle-target">
                        <p>Tokyo stock Price Index, commonly known as TOPIX, along with Nikkei 225, is an important stock market index for the Tokyo Stock Exchange in Japan, tracking all domestic companies of the exchange's First Section. It is calculated and published by the TSE. As of February 1, 2011, there are 1,669 companies listed on the First Section of the TSE. The market value for the index on the same date is 197,401 Billion Yen.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Tue,Wed,Fri 00:05-02:30,03:35-06:00 GMT</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>TOPX500</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">MICEX 10 (MOSCOW INTERBANK EXCHANGE)</a>
                    <div class="ba-content js-toggle-target">
                        <p>The MICEX 10 Index is a price non-weighted index, calculated as the arithmetic mean of the change of prices of 10 most liquid stocks admitted to circulation in the Stock Market Section of the Moscow Interbank Currency Exchange in Moscow. The Index includes Russian Top firms in a variety of sectors such as GAZProm and SBERBANK.</p>
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 7:10 - 14:30</td>
                            </tr>
                            <tr>
                                <th>Reuters Code:</th>
                                <td>.MCX10</td>
                            </tr>
                            <tr>
                                <th>Expiry Rule:</th>
                                <td>Reuters Last Rate</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ASX</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 00:10-05:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">IBEX</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FTSE F-DEC16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">ASX F-DEC16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 00:10-05:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">NIFTY F-SEP16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 04:00-10:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SMI</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FAZ-SHORT BANKS(ETF)</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">IBEX F-OCT16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">HANG SENG F-SEP16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:40-04:00,05:10-08:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">CSI 300</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:40-03:30,05:05-07:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">TSX 60</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">SHANGHAI COMPOSITE</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 01:40-03:30,05:05-07:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">DOLLAR INDEX-DEC16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 10:00-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">GERMANY 10YR-DEC16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FTSE MIB F-DEC16</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 07:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">RUSSELL 2000</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 13:40-20:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">FTSE 250</a>
                    <div class="ba-content js-toggle-target">
                        <table class="bac-table">
                            <tr>
                                <th>Trading Hours:</th>
                                <td>Mon - Fri 7:15-15:30</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

