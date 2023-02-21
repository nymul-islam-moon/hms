<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="workout-statistic.html">Workout Statistic</a></li>
                    <li><a href="workoutplan.html">Workout Plan</a></li>
                    <li><a href="distance-map.html">Distance Map</a></li>
                    <li><a href="food-menu.html">Diet Food Menu</a></li>
                    <li><a href="personal-record.html">Personal Record</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Income</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('income.card.index') }}">Card</a></li>
                    <li><a href="{{ route('income.cash.index') }}">Cash</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Mobile Banking</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Mobile Bank</a></li>
                            <li><a href="{{ route('income.mobilebank.system.index') }}">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Expenses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Card</a></li>
                    <li><a href="">Cash</a></li>

                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Transfer</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Card</a></li>
                    <li><a href="">Cash</a></li>

                </ul>
            </li> --}}

        </ul>
    </div>
</div>
