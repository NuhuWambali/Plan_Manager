<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">


            <li class="nav-small-cap m-t-10">---Plan your life---</li>
            <li> <a href="{{route('index')}}" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
            <li> <a href="{{route('createPlan')}}" class="waves-effect"><i class="ti-book p-r-10"></i> <span class="hide-menu">Create Plan</span></a> </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Time Table </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{route('createTimetableView')}}">Create TimeTable</a> </li>
                    <li> <a href="{{route('viewTimetable')}}">View Time Table</a> </li>
                </ul>
            </li>

            <li class="nav-small-cap m-t-10">-----My Plans-----</li>
            <li> <a href="{{route('todayPlans')}}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> To day</span></a>

            </li>
            <li> <a href="{{route('thisWeekPlan')}}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> This Week</span></a>

            </li>
            <li> <a href="{{route('thisMonthPlan')}}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> This Month </span></a>

            </li>
            <li> <a href="{{route('thisYearPlan')}}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu">This year </span></a>
            </li>
        </ul>
    </div>
</div>
