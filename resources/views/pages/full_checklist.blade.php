@extends('layouts.app')

@section('title', 'Full Checklist | Cleanovative')

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.webp') }});">
        <div class="container">
            <div class="breadcrumb-text text-center">
                <h1 class="page-title text-dark">Full Checklist</h1>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== ABOUT PART START ======-->
    <section class="full-checklist-section">
        <div class="container">
            <div class="pt-20">
                <h2 class="text-center pt-50 pb-50">Cleanovative Cleaning Checklists</h2>
                <div class="row table-responsive">
                    <table class="table table-striped table-light mb-100">
                        <thead class="bg-theme-light text-light">
                            <tr>
                                <th>
                                    BEDROOMS, LIVING ROOMS AND ALL COMMON AREAS
                                </th>
                                <th class="text-center">
                                    STANDARD CLEAN
                                </th>
                                <th class="text-center">
                                    DEEP CLEAN
                                </th>
                                <th class="text-center">
                                    END OF LEASE
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    Clean switches & doorknobs
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean hallways & staircases
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vacuum & mop all floors
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dust & wipe down all surfaces
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Empty Bins
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Make Beds (upon request)
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dust furniture
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean window ledges
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Quick de-clutter of floors
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean cobwebs
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wipe down electronics
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean Mirrors
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Detail skirting boards
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Detail all doors & door frames
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean ceiling fan & A.C vents
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean inside cabinets, drawers & shelves
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Inside windows + Window Tracks
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped table-light mb-100">
                        <thead class="bg-theme-light text-light">
                            <tr>
                                <th style="width: 310px">
                                    BATHROOM & LAUNDRY
                                </th>
                                <th class="text-center">
                                    STANDARD CLEAN
                                </th>
                                <th class="text-center">
                                    DEEP CLEAN
                                </th>
                                <th class="text-center">
                                    END OF LEASE
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    Clean floors
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Scrub Toilers
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean outside of cabinets & drawers
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean bathtub & shower
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean sink & taps
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean mirrors
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean inside of cabinets & drawers
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped table-light mb-100">
                        <thead class="bg-theme-light text-light">
                            <tr>
                                <th style="width: 310px">
                                    KITCHEN
                                </th>
                                <th class="text-center">
                                    STANDARD CLEAN
                                </th>
                                <th class="text-center">
                                    DEEP CLEAN
                                </th>
                                <th class="text-center">
                                    END OF LEASE
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    Stack & run dishwasher (upon request)
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wipe down outside of appliances
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wet wipe outside of fridge
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wet wipe outside of oven
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean outside of cabinets & drawers
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean all surface
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean sink
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean stove
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vacuum & mop floor
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean inside oven
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean range hood & filters
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Clean inside cabinets, shelves & drawers
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-x-circle"></i>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-check2-circle"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->

    <div class="mt-5 mb-0">
        @include('components.booking-banner')
    </div>
@endsection
