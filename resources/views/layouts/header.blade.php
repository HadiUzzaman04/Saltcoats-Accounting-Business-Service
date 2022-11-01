<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('home')}}" class="logo">Logo</a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('home')}}" class="inactive">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accounting</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('accounting')}}">Accounting Service</a>
                                <a class="dropdown-item" href="{{route('deck')}}">Pitch Deck Service</a>
                                <a class="dropdown-item" href="{{route('accountingfaq')}}">FAQ</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Audit</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('audit')}}">Audit Service</a>
                                <a class="dropdown-item" href="{{route('rera')}}">Service Charge Buget Review by RERA</a>
                                <a class="dropdown-item" href="{{route('hoa')}}">Home Owners Association</a>
                                <a class="dropdown-item" href="{{route('ifrs')}}">IFRS Advisory Service</a>
                                <a class="dropdown-item" href="{{route('auditfaq')}}">FAQ</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tax</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('corporatetax')}}">Corporate Tax</a>
                                <a class="dropdown-item" href="{{route('vatconsultant')}}">Vat Consultants</a>
                                <a class="dropdown-item" href="{{route('taxfaq')}}">FAQ</a>
                            </div>
                        </li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('contactus')}}">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>