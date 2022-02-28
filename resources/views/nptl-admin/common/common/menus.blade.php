<nav id="admin_main_nav">
     <ul>
        <li ctrl="dashboard">
            <a href="{{url(url(SM::smAdminSlug()))}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i>
                <span class="menu-item-parent">Dashboard</span>
            </a>
        </li>
        <li ctrl="media">
            <a href="{{url(url(SM::smAdminSlug('media')))}}" title="Media"><i class="fa fa-lg fa-fw fa-picture-o"></i>
                <span class="menu-item-parent">Media Gallery</span>
            </a>
        </li>
        <?php if (SM::check_this_contoller_access('tags')): ?>
        <li ctrl="tags">
            <a href="#"><i class="fa fa-lg fa-fw fa-tags"></i> <span
                        class="menu-item-parent">Tag Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('tags', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('tags/create'))}}">Add Tag</a>
                </li>
                <?php endif; ?>

                <?php if (SM::check_this_method_access('tags', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('tags'))}}">All Tag</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('categories')): ?>
        <li ctrl="categories">
            <a href="#"><i class="fa fa-lg fa-fw fa-list"></i> <span
                        class="menu-item-parent">Category </span></a>
            <ul>
                <?php if (SM::check_this_method_access('categories', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('categories/create'))}}">Add category</a>
                </li>
                <?php endif; ?>

                <?php if (SM::check_this_method_access('categories', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('categories'))}}">All Categories</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('services')): ?>
        <li ctrl="services">
            <a href="#"><i class="fa fa-lg fa-fw fa-list-ul"></i> <span
                        class="menu-item-parent">Service Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('services', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('services/create'))}}">Add Service</a>
                </li>
                <?php endif; ?>

                <?php if (SM::check_this_method_access('services', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('services'))}}">All Services</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
         <?php if (SM::check_this_contoller_access('projects')): ?>
         <li ctrl="projects">
             <a href="#"><i class="fa fa-lg fa-fw fa-list-ul"></i> <span
                         class="menu-item-parent">Design Projects</span></a>
             <ul>
                 <?php if (SM::check_this_method_access('projects', 'create')): ?>
                 <li mtd="create">
                     <a href="{{url(SM::smAdminSlug('project/create'))}}">Add Design Projects</a>
                 </li>
                 <?php endif; ?>

                 <?php if (SM::check_this_method_access('projects', 'index')): ?>
                 <li mtd="index">
                     <a href="{{url(SM::smAdminSlug('project'))}}">All Design Projects</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </li>
         <?php endif; ?>

         <?php if (SM::check_this_contoller_access('constructions')): ?>
         <li ctrl="constructions"">
             <a href="#"><i class="fa fa-lg fa-fw fa-list-ul"></i> <span
                         class="menu-item-parent">Construction Projects</span></a>
             <ul>
                 <?php if (SM::check_this_method_access('constructions', 'create')): ?>
                 <li mtd="create">
                     <a href="{{url(SM::smAdminSlug('constructions/create'))}}">Add Construction</a>
                 </li>
                 <?php endif; ?>

                 <?php if (SM::check_this_method_access('constructions', 'index')): ?>
                 <li mtd="index">
                     <a href="{{url(SM::smAdminSlug('constructions'))}}">All Construction</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </li>
         <?php endif; ?>
         <?php if (SM::check_this_contoller_access('flatforsales')): ?>
         <li ctrl="flatforsales">
             <a href="#"><i class="fa fa-lg fa-fw fa-list-ul"></i> <span
                         class="menu-item-parent">Projects</span></a>
             <ul>
                 <?php if (SM::check_this_method_access('flatforsales', 'create')): ?>
                 <li mtd="create">
                     <a href="{{url(SM::smAdminSlug('flatforsales/create'))}}">Add Projects</a>
                 </li>
                 <?php endif; ?>

                 <?php if (SM::check_this_method_access('flatforsales', 'index')): ?>
                 <li mtd="index">
                     <a href="{{url(SM::smAdminSlug('flatforsales'))}}">All Projects</a>
                 </li>
                 <?php endif; ?>
             </ul>
            
         </li>
         <?php endif; ?>

         <?php if (SM::check_this_contoller_access('galleries')): ?>
         <li ctrl="galleries">
             <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span
                         class="menu-item-parent">Gallery Management</span></a>
             <ul>
                 <?php if (SM::check_this_method_access('galleries', 'create')): ?>
                 <li mtd="create">
                     <a href="{{url(SM::smAdminSlug('galleries/create'))}}">Add Gallery</a>
                 </li>
                 <?php endif; ?>
                 <?php if (SM::check_this_method_access('galleries', 'index')): ?>
                 <li mtd="index">
                     <a href="{{url(SM::smAdminSlug('galleries'))}}">All Gallery</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </li>
         <?php endif; ?>


        <?php if (SM::check_this_contoller_access('products')): ?>
        <li ctrl="products" style="display: none;">
            <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span
                        class="menu-item-parent">Product Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('products', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('products/create'))}}">Add Product</a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('products', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('products'))}}">All Product</a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('products', 'reviews')): ?>
                <li mtd="reviews">
                    <a href="{{url(SM::smAdminSlug('products/reviews'))}}">All Reviews</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('brands')): ?>
        <li ctrl="brands" style="display: none;">
            <a href="#"><i class="fa fa-lg fa-fw fa-tags"></i> <span
                        class="menu-item-parent">Brand Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('brands', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('brands/create'))}}">Add Brand</a>
                </li>
                <?php endif; ?>

                <?php if (SM::check_this_method_access('brands', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('brands'))}}">All Brand</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('blogs')): ?>
        <li ctrl="blogs">
            <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span
                        class="menu-item-parent">Blog Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('blogs', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('blogs/create'))}}">Add Blog</a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('blogs', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('blogs'))}}">All Blog</a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('blogs', 'comments')): ?>
                <li mtd="comments">
                    <a href="{{url(SM::smAdminSlug('blogs/comments'))}}">All Comments</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('careers')): ?>
         <li ctrl="coupons" >
             <a href="#"><i class="fa fa-lg fa-fw fa-thumbs-up"></i> <span
                         class="menu-item-parent">Career</span></a>
             <ul>
                 <?php if (SM::check_this_method_access('careers', 'create')): ?>
                 <li mtd="create">
                     <a href="{{url(SM::smAdminSlug('careers/create'))}}">Add Career</a>
                 </li>
                 <?php endif; ?>
                 <?php if (SM::check_this_method_access('careers', 'index')): ?>
                 <li mtd="index">
                     <a href="{{url(SM::smAdminSlug('careers'))}}">All Career</a>
                 </li>
                 <?php endif; ?>

                     <?php if (SM::check_this_method_access('careers', 'applicent')): ?>
                     <li ctrl="applicent" >
                         <a href="{{url(SM::smAdminSlug('careerapplys'))}}">
                             <span  class="menu-item-parent">Applicants</span>
                         </a>
                     </li>
                     <?php endif; ?>
             </ul>
         </li>
         <?php endif; ?>

        <?php if (SM::check_this_contoller_access('page')): ?>
        <li ctrl="page">
            <a href="#"><i class="fa fa-lg fa-fw fa-pagelines"></i> <span
                        class="menu-item-parent">Page Management</span></a>
            <ul>
                <?php if (SM::check_this_method_access('page', 'add_page')): ?>
                <li mtd="add_page">
                    <a href="{{url(SM::smAdminSlug('pages/add_page'))}}">Add Page</a>
                </li>
                <?php endif; ?>

                <?php if (SM::check_this_method_access('page', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('pages'))}}">All Page</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('sliders')): ?>
        <li ctrl="sliders">
            <a href="#"><i class="fa fa-lg fa-fw fa-sliders"></i> <span class="menu-item-parent">
                    Sliders
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('sliders', 'add_slider')): ?>
                <li mtd="add_slider">
                    <a href="{{url(SM::smAdminSlug('sliders/add_slider'))}}">
                        {{__("menu.addSlider")}}
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('sliders', 'sliders')): ?>
                <li mtd="sliders">
                    <a href="{{url(SM::smAdminSlug('sliders'))}}">
                        {{__("menu.sliders")}}
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('appearance')): ?>
        <li ctrl="appearance">
            <a href="#"><i class="fa fa-lg fa-fw fa-eye"></i> <span class="menu-item-parent">
                    {{__("menu.appearance")}}
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('appearance', 'smthemeoptions')): ?>
                <li mtd="smthemeoptions">
                    <a href="{{url(SM::smAdminSlug('appearance/smthemeoptions'))}}">
                        {{__("menu.themeOption")}}
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('appearance', 'menus')): ?>
                <li mtd="menus">
                    <a href="{{url(SM::smAdminSlug('appearance/menus'))}}">
                        {{__("menu.menus")}}
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('appearance', 'editor')): ?>
                <li mtd="editor">
                    <a href="{{url(SM::smAdminSlug('appearance/editor'))}}">
                        <span class="menu-item-parent">Editor</span></a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif;?>
        <?php if (SM::check_this_contoller_access('users')): ?>
        <li ctrl="users">
            <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">
                    Users
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('users', 'add_user')): ?>
                <li mtd="add_user">
                    <a href="{{url(SM::smAdminSlug('users/add_user'))}}">
                        {{__("menu.addUser")}}
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('users', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('users'))}}">
                        {{__("menu.allUser")}}
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('users', 'add_role')): ?>
                <li mtd="add_role">
                    <a href="{{url(SM::smAdminSlug('users/add_role'))}}">
                        Add Role
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('users', 'roles')): ?>
                <li mtd="roles">
                    <a href="{{url(SM::smAdminSlug('users/roles'))}}">
                        User Roles
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('customers')): ?>
        <li ctrl="customers" style="display: none;">>
            <a href="#"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">
                    Customers
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('customers', 'add_customer')): ?>
                <li mtd="add_customer">
                    <a href="{{url(SM::smAdminSlug('customers/add_customer'))}}">
                        Add Customer
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('customers', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('customers'))}}">
                        Customer List
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('contacts')): ?>
        <li ctrl="contacts">
            <a href="{{url(url(SM::smAdminSlug('contacts')))}}" title="contacts"><i class="fa fa-lg fa-fw fa-address-book"></i>
                <span class="menu-item-parent">Contacts</span>
            </a>
        </li>
        <?php endif; ?>
         <?php if (SM::check_this_contoller_access('subscribers')): ?>
        <li ctrl="subscribers">
            <a href="{{url(url(SM::smAdminSlug('subscribers')))}}" title="subscribers"><i class="fa fa-lg fa-fw fa-star"></i>
                <span class="menu-item-parent">Subscribers</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('Taxes')): ?>
        <li ctrl="taxes" style="display: none;">
            <a href="#"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">
                    Taxes
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('Taxes', 'create')): ?>
                <li mtd="create">
                    <a href="{{url(SM::smAdminSlug('taxes/create'))}}">
                        Add Tax
                    </a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('Taxes', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('taxes'))}}">
                        Tax List
                    </a>c
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if (SM::check_this_contoller_access('setting')): ?>
        <li ctrl="setting">
            <a href="#"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">
                    {{__("menu.setting")}}
                </span></a>
            <ul>
                <?php if (SM::check_this_method_access('setting', 'index')): ?>
                <li mtd="index">
                    <a href="{{url(SM::smAdminSlug('setting'))}}"><i class="fa fa-lg fa-fw fa-cogs"></i>
                        <span class="menu-item-parent">{{__("menu.generalSetting")}}</span></a>
                </li>
                <?php endif; ?>
                <?php if (SM::check_this_method_access('setting', 'social')): ?>
                <li mtd="social">
                    <a href="{{url(SM::smAdminSlug('setting/social'))}}"><i class="fa fa-lg fa-fw fa-share"></i>
                        <span class="menu-item-parent">Social Setting</span></a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
</nav>
<span class="minifyme" data-action="minifyMenu">
   <i class="fa fa-arrow-circle-left hit"></i>
</span>