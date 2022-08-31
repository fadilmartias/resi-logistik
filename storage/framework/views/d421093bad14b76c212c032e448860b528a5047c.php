<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps"><?php echo app('translator')->get('translation.Apps'); ?></li>


                <li>
                    <a href="<?php echo e(route('resi-pengiriman.index')); ?>">
                        <i data-feather="message-square"></i>
                        <span data-key="t-chat">Resi Pengiriman</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="shopping-cart"></i>
                        <span data-key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products" key="t-products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                        <li><a href="ecommerce-product-detail" data-key="t-product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a></li>
                        <li><a href="ecommerce-orders" data-key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="ecommerce-customers" data-key="t-customers"><?php echo app('translator')->get('translation.Customers'); ?></a></li>
                        <li><a href="ecommerce-cart" data-key="t-cart"><?php echo app('translator')->get('translation.Cart'); ?></a></li>
                        <li><a href="ecommerce-checkout" data-key="t-checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a></li>
                        <li><a href="ecommerce-shops" data-key="t-shops"><?php echo app('translator')->get('translation.Shops'); ?></a></li>
                        <li><a href="ecommerce-add-product" data-key="t-add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="apps-chat">
                        <i data-feather="message-square"></i>
                        <span data-key="t-chat"><?php echo app('translator')->get('translation.Chat'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email"><?php echo app('translator')->get('translation.Email'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="apps-email-inbox" data-key="t-inbox"><?php echo app('translator')->get('translation.Inbox'); ?></a></li>
                        <li><a href="apps-email-read" data-key="t-read-email"><?php echo app('translator')->get('translation.Read_Email'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="apps-calendar">
                        <i data-feather="calendar"></i>
                        <span data-key="t-calendar"><?php echo app('translator')->get('translation.Calendars'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="apps-contacts-grid" data-key="t-user-grid"><?php echo app('translator')->get('translation.User_Grid'); ?></a></li>
                        <li><a href="apps-contacts-list" data-key="t-user-list"><?php echo app('translator')->get('translation.User_List'); ?></a></li>
                        <li><a href="apps-contacts-profile" data-key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list" key="t-task-list"><?php echo app('translator')->get('translation.Task_List'); ?></a></li>
                        <li><a href="tasks-kanban" key="t-kanban-board"><?php echo app('translator')->get('translation.Kanban_Board'); ?></a></li>
                        <li><a href="tasks-create" key="t-create-task"><?php echo app('translator')->get('translation.Create_Task'); ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication"><?php echo app('translator')->get('translation.Authentication'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login"><?php echo app('translator')->get('translation.Login'); ?></a></li>
                        <li><a href="auth-register" data-key="t-register"><?php echo app('translator')->get('translation.Register'); ?></a></li>
                        <li><a href="auth-recoverpw" data-key="t-recover-password"><?php echo app('translator')->get('translation.Recover_Password'); ?></a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_Screen'); ?></a></li>
                        <li><a href="auth-logout" data-key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></a></li>
                        <li><a href="auth-confirm-mail" data-key="t-confirm-mail"><?php echo app('translator')->get('translation.Confirm_Mail'); ?></a></li>
                        <li><a href="auth-email-verification" data-key="t-email-verification"><?php echo app('translator')->get('translation.Email_verification'); ?></a></li>
                        <li><a href="auth-two-step-verification" data-key="t-two-step-verification"><?php echo app('translator')->get('translation.Two_step_verification'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" key="t-starter-page"><?php echo app('translator')->get('translation.Starter_Page'); ?></a></li>
                        <li><a href="pages-maintenance" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a></li>
                        <li><a href="pages-comingsoon" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a></li>
                        <li><a href="pages-timeline" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a></li>
                        <li><a href="pages-faqs" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a></li>
                        <li><a href="pages-pricing" key="t-pricing"><?php echo app('translator')->get('translation.Pricing'); ?></a></li>
                        <li><a href="pages-404" key="t-error-404"><?php echo app('translator')->get('translation.Error_404'); ?></a></li>
                        <li><a href="pages-500" key="t-error-500"><?php echo app('translator')->get('translation.Error_500'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="layouts-horizontal">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></span>
                    </a>
                </li>

                <li class="menu-title mt-2" data-key="t-components"><?php echo app('translator')->get('translation.Components'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components"><?php echo app('translator')->get('translation.Bootstrap'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" key="t-alerts"><?php echo app('translator')->get('translation.Alerts'); ?></a></li>
                        <li><a href="ui-buttons" key="t-buttons"><?php echo app('translator')->get('translation.Buttons'); ?></a></li>
                        <li><a href="ui-cards" key="t-cards"><?php echo app('translator')->get('translation.Cards'); ?></a></li>
                        <li><a href="ui-carousel" key="t-carousel"><?php echo app('translator')->get('translation.Carousel'); ?></a></li>
                        <li><a href="ui-dropdowns" key="t-dropdowns"><?php echo app('translator')->get('translation.Dropdowns'); ?></a></li>
                        <li><a href="ui-grid" key="t-grid"><?php echo app('translator')->get('translation.Grid'); ?></a></li>
                        <li><a href="ui-images" key="t-images"><?php echo app('translator')->get('translation.Images'); ?></a></li>
                        <li><a href="ui-modals" key="t-modals"><?php echo app('translator')->get('translation.Modals'); ?></a></li>
                        <li><a href="ui-offcanvas" key="t-offcanvas"><?php echo app('translator')->get('translation.Offcanvas'); ?></a></li>
                        <li><a href="ui-progressbars" key="t-progress-bars"><?php echo app('translator')->get('translation.Progress_Bars'); ?></a></li>
                        <li><a href="ui-placeholders" key="t-placeholders"><?php echo app('translator')->get('translation.Placeholders'); ?></a></li>
                        <li><a href="ui-tabs-accordions" key="t-tabs-accordions"><?php echo app('translator')->get('translation.Tabs_&_Accordions'); ?></a></li>
                        <li><a href="ui-typography" key="t-typography"><?php echo app('translator')->get('translation.Typography'); ?></a></li>
                        <li><a href="ui-video" key="t-video"><?php echo app('translator')->get('translation.Video'); ?></a></li>
                        <li><a href="ui-general" key="t-general"><?php echo app('translator')->get('translation.General'); ?></a></li>
                        <li><a href="ui-colors" key="t-colors"><?php echo app('translator')->get('translation.Colors'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements"><?php echo app('translator')->get('translation.Extended'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox" data-key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                        <li><a href="extended-rangeslider" data-key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                        <li><a href="extended-sweet-alert" data-key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?> 2</a></li>
                        <li><a href="extended-session-timeout" data-key="t-session-timeout"><?php echo app('translator')->get('translation.Session_Timeout'); ?></a></li>
                        <li><a href="extended-rating" data-key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                        <li><a href="extended-notifications" data-key="t-notifications"><?php echo app('translator')->get('translation.Notifications'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                        <span data-key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" data-key="t-form-elements"><?php echo app('translator')->get('translation.Basic_Elements'); ?></a></li>
                        <li><a href="form-validation" data-key="t-form-validation"><?php echo app('translator')->get('translation.Validation'); ?></a></li>
                        <li><a href="form-advanced" data-key="t-form-advanced"><?php echo app('translator')->get('translation.Advanced_Plugins'); ?></a></li>
                        <li><a href="form-editors" data-key="t-form-editors"><?php echo app('translator')->get('translation.Editors'); ?></a></li>
                        <li><a href="form-uploads" data-key="t-form-upload"><?php echo app('translator')->get('translation.File_Upload'); ?></a></li>
                        <li><a href="form-wizard" data-key="t-form-wizard"><?php echo app('translator')->get('translation.Wizard'); ?></a></li>
                        <li><a href="form-mask" data-key="t-form-mask"><?php echo app('translator')->get('translation.Mask'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" data-key="t-basic-tables"><?php echo app('translator')->get('translation.Bootstrap_Basic'); ?></a></li>
                        <li><a href="tables-datatable" data-key="t-data-tables"><?php echo app('translator')->get('translation.Data_Tables'); ?></a></li>
                        <li><a href="tables-responsive" data-key="t-responsive-table"><?php echo app('translator')->get('translation.Responsive'); ?></a></li>
                        <li><a href="tables-editable" data-key="t-editable-table"><?php echo app('translator')->get('translation.Editable_Table'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" data-key="t-apex-charts"><?php echo app('translator')->get('translation.Apex_Charts'); ?></a></li>
                        <li><a href="charts-echart" data-key="t-e-charts"><?php echo app('translator')->get('translation.E_Charts'); ?></a></li>
                        <li><a href="charts-chartjs" data-key="t-chartjs-charts"><?php echo app('translator')->get('translation.Chartjs'); ?></a></li>
                        <li><a href="charts-knob" data-key="t-knob-charts"><?php echo app('translator')->get('translation.Jquery_Knob'); ?></a></li>
                        <li><a href="charts-sparkline" data-key="t-sparkline-charts"><?php echo app('translator')->get('translation.Sparkline'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons"><?php echo app('translator')->get('translation.Icons'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-feather" data-key="t-feather"><?php echo app('translator')->get('translation.Feather'); ?></a></li>
                        <li><a href="icons-boxicons" data-key="t-boxicons"><?php echo app('translator')->get('translation.Boxicons'); ?></a></li>
                        <li><a href="icons-materialdesign" data-key="t-material-design"><?php echo app('translator')->get('translation.Material_Design'); ?></a></li>
                        <li><a href="icons-dripicons" data-key="t-dripicons"><?php echo app('translator')->get('translation.Dripicons'); ?></a></li>
                        <li><a href="icons-fontawesome" data-key="t-font-awesome"><?php echo app('translator')->get('translation.Font_awesome'); ?> 5</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="map"></i>
                        <span data-key="t-maps"><?php echo app('translator')->get('translation.Maps'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" data-key="t-g-maps"><?php echo app('translator')->get('translation.Google'); ?></a></li>
                        <li><a href="maps-vector" data-key="t-v-maps"><?php echo app('translator')->get('translation.Vector'); ?></a></li>
                        <li><a href="maps-leaflet" data-key="t-l-maps"><?php echo app('translator')->get('translation.Leaflet'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level"><?php echo app('translator')->get('translation.Multi_Level'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1-1"><?php echo app('translator')->get('translation.Level_1.1'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2"><?php echo app('translator')->get('translation.Level_1.2'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2-1"><?php echo app('translator')->get('translation.Level_2.1'); ?></a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2-2"><?php echo app('translator')->get('translation.Level_2.2'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\laragon\www\resi-logistik\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>