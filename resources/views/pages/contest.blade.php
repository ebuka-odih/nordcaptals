
@extends('pages.layout.app')
@section('content')

<div class="main-home-content">
    <section class="section section_contest-prizes">
        <div class="contest-prize">
            <div class="wrapper">
                <div class="contest-prize-pic"><img src="../assets/css/img/main/contest-prize-1.png" alt="contest"></div>
                <div class="inner">
                    <h2>Trading contest! <span>Prize fund $20000</span></h2>
                    <div class="btn-row"> <a href="{{ route('register') }}" class="btn">Free registration</a> </div>
                    <p>For experienced traders and beginners</p>
                </div>
            </div>
        </div>
        <div class="contest-prize">
            <div class="wrapper">
                <div class="contest-prize-pic"><img src="../assets/css/img/main/contest-prize-2.png" alt="contest"></div>
                <div class="inner">
                    <p>All trading accounts automatically participate in the contest!</p>
                    <h2>40 winners every Week!</h2>
                    <p>All your trades will be counted regardless the trading result.</p>
                </div>
            </div>
        </div>
    </section>
    <div ng-include="'/api/ag/tourney_internal'"></div>
    <section class="section section_contest-faq">
        <div class="wrapper">
            <div class="inner">
                <h2>Trading Contest FAQ</h2>
                <div class="accordeon">
                    <div class="accordeon-cont active">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>How the winning places are distributed?</span> </a>
                        <div class="accordeon-hide active">The places are distributed based on number of trades in 1 week, during active contest time.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>What are the prizes for this contest?</span> </a>
                        <div class="accordeon-hide">First 4 places are getting 20000$ in cash. Other places are getting valuable prizes and bonuses.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>How do I sign up for the contest?</span> </a>
                        <div class="accordeon-hide">All Samtrade traders are automatically signed up for contest.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>When will the competition be running?</span> </a>
                        <div class="accordeon-hide">The contest starts every Sunday at 21.00 GMT and ends Sunday at 20.30 GMT.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>Are there any trading limitations to qualify in the contest?</span> </a>
                        <div class="accordeon-hide">All trades are counted, regardless trading result. The minimum trade size should be 10$. CFD trading volume is not counted in trading contest.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>How will I know if I won a prize?</span> </a>
                        <div class="accordeon-hide">You will be notified by email about your place and the prize you won. Also you can always check your rank in the leader board.</div>
                    </div>
                    <div class="accordeon-cont">
                        <a href="#" class="accordeon-link">
                            <div class="accordeon-pluse"><span></span><span></span></div> <span>How can I get a prize I won?</span> </a>
                        <div class="accordeon-hide">To get a prize, your available net balance should be 250$ or more. Bonus prize will be credited to a trading account, if total amount of previous bonuses is not exceeding 150% of the total deposits amount.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
