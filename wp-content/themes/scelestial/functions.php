<?php 
/****************** Styles *****************/
function rosary_styles(){
	wp_enqueue_style('icon', get_stylesheet_directory_uri() . '/assets/images/fav.png' );
	wp_enqueue_style('gstatic', "https://fonts.gstatic.com" );
	wp_enqueue_style('fonts.googleapis', "https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" );
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css' );
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style('icon-font', get_stylesheet_directory_uri() . '/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css' );
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/vendor/animate/animate.css' );
	wp_enqueue_style('hamburgers', get_stylesheet_directory_uri() . '/assets/vendor/css-hamburgers/hamburgers.min.css' );
	wp_enqueue_style('daterangepicker', get_stylesheet_directory_uri() . '/assets/vendor/daterangepicker/daterangepicker.css' );
	wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/vendor/slick/slick.css' );
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick/slick-theme.css' );
	wp_enqueue_style('lightbox2', get_stylesheet_directory_uri() . '/assets/vendor/lightbox2/css/lightbox.min.css' );
	wp_enqueue_style('util', get_stylesheet_directory_uri() . '/assets/css/util.css' );
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style('media', get_stylesheet_directory_uri() . '/assets/css/media.css' ); 

	wp_enqueue_script( 'jquerymin',get_bloginfo('stylesheet_directory') . '/assets/vendor/jquery/jquery-3.2.1.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'animsition',get_bloginfo('stylesheet_directory') . '/assets/vendor/animsition/js/animsition.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'popper',get_bloginfo('stylesheet_directory') . '/assets/vendor/bootstrap/js/popper.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'bootstrapjs',get_bloginfo('stylesheet_directory') . '/assets/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'select2',get_bloginfo('stylesheet_directory') . '/assets/vendor/select2/select2.min.js', array( 'jquery' ) );   
	wp_enqueue_script( 'slick',get_bloginfo('stylesheet_directory') . '/assets/vendor/slick/slick.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'slick-custom',get_bloginfo('stylesheet_directory') . '/assets/js/slick-custom.js', array( 'jquery' ) ); 
	//wp_enqueue_script( 'lightbox',get_bloginfo('stylesheet_directory') . '/assets/vendor/lightbox2/js/lightbox.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'parallax',get_bloginfo('stylesheet_directory') . '/assets/vendor/parallax100/parallax100.js', array( 'jquery' ) );
	wp_enqueue_script( 'mainjs',get_bloginfo('stylesheet_directory') . '/assets/js/main.js', array( 'jquery' ) );  

}

add_action('wp_enqueue_scripts', 'rosary_styles');

/***************Functions theme ********************/

function theme_customize_register($wp_customize){

	$wp_customize->add_panel('panel1',
		array(
			'title' => 'Home',
			'priority' => 1,
		)
	);
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-banner.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-comoda.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-colecciones.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-descuento.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-asesora.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-about.php';

    $wp_customize->add_panel('panel2',
        array(
            'title' => 'Información de Contacto',
            'priority' => 2,
        )
    );
	

    require_once trailingslashit( get_template_directory() ) . 'inc/contact/customizer-contact.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/contact/customizer-social-networks.php';


	$wp_customize->add_panel('panel4',
		array(
			'title' => 'Descubre mas',
			'priority' => 4,
		)
	);
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-descubre-mas.php';

}
add_action('customize_register','theme_customize_register');

/***************** FNT General ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnc/fnc.php';

/***************** Local field group ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnc/local-field-group.php';

/*********** ITEMS Banner***********/
function custom_post_type_Items_banner() {

  $labels = array(
    'name'                  => _x( 'Items Banner', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Items Banner', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Items Banner', 'text_domain' ),
    'name_admin_bar'        => __( 'Items Banner', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items Banner', 'text_domain' ),
    'all_items Banner'             => __( 'All Items Banner', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items Banner', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Items Banner', 'text_domain' ),
    'edit_item'             => __( 'Edit Items Video', 'text_domain' ),
    'update_item'           => __( 'Update Items Banner', 'text_domain' ),
    'view_items Banner'            => __( 'See Items Banner', 'text_domain' ),
    'search_items Banner'          => __( 'Search Items Banner', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items Banner_list'            => __( 'items Banner List', 'text_domain' ),
    'items Banner_list_navigation' => __( 'items Banner List Navigation', 'text_domain' ),
    'filter_items Banner_list'     => __( 'filter Items Banner List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Items Banner', 'text_domain' ),
    'description'           => __( 'Items Banner image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-images-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'Items Banner', $args );

}
add_action( 'init', 'custom_post_type_Items_banner', 0 );

/*********** Items Team***********/
function custom_post_type_Items_team() {

  $labels = array(
    'name'                  => _x( 'Items Team', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Items Team', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Items Team', 'text_domain' ),
    'name_admin_bar'        => __( 'Items Team', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items Team', 'text_domain' ),
    'all_items Team'             => __( 'All Items Team', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items Team', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Items Team', 'text_domain' ),
    'edit_item'             => __( 'Edit Items Video', 'text_domain' ),
    'update_item'           => __( 'Update Items Team', 'text_domain' ),
    'view_items Team'            => __( 'See Items Team', 'text_domain' ),
    'search_items Team'          => __( 'Search Items Team', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items Team_list'            => __( 'items Team List', 'text_domain' ),
    'items Team_list_navigation' => __( 'items Team List Navigation', 'text_domain' ),
    'filter_items Team_list'     => __( 'filter Items Team List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Items Team', 'text_domain' ),
    'description'           => __( 'Items Team image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-images-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'Items Team', $args );

}
add_action( 'init', 'custom_post_type_Items_team', 0 );




function azafran_search() {
	register_sidebar(
		array(
			'name'          => __( 'azafran search' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Widget buscador'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
}
add_action( 'widgets_init', 'azafran_search' );

/**
* Función para cambiar las etiquetas(labels) y placeholders de los campos que no sean de dirección
*/
function claserama_edit_address_labels_placeholders_checkout($address_fields){
    $address_fields['country']['placeholder']='pais';
    $address_fields['address_1']['placeholder']='Dirección';
	//$address_fields['address_2']['placeholder']='Apartamento, torre, etc.';
	$address_fields['postcode']['placeholder']='Código postal.';
    return $address_fields;
}
add_filter('woocommerce_default_address_fields','claserama_edit_address_labels_placeholders_checkout');

/*********** Add fields aditional account ***********/

add_action( 'woocommerce_edit_account_form', 'add_data_to_edit_account_form' );
function add_data_to_edit_account_form() {
    $user = wp_get_current_user();
    ?>


        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="Nro-identificacion">
        <label for="Nro-identificacion"><?php _e( 'Nro-identificacion', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="user_registration_input_box_1607537722" id="user_registration_input_box_1607537722" value="<?php echo esc_attr( $user->user_registration_input_box_1607537722 ); ?>" placeholder="Identificacion"/>
        </p>        

        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="billing_countrys">
        <label for="billing_country"><?php _e( 'billing_country', 'woocommerce' ); ?></label>
        <select name="billing_country" id="billing_country"  tabindex="-1" aria-hidden="true"><option value="default">País</option>


            <option value="AF">Afganistán</option><option value="AL">Albania</option><option value="DE">Alemania</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antártida</option><option value="AG">Antigua y Barbuda</option><option value="SA">Arabia Saudita</option><option value="DZ">Argelia</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="PW">Belau</option><option value="BE">Bélgica</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorrusia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, San Eustaquio y Saba</option><option value="BA">Bosnia y Herzegovina</option><option value="BW">Botswana</option><option value="BR">Brasil</option><option value="BN">Brunéi</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CV">Cabo Verde</option><option value="KH">Camboya</option><option value="CM">Camerún</option><option value="CA">Canadá</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CY">Chipre</option><option value="VA">Ciudad del Vaticano</option><option value="CO" >Colombia</option><option value="KM">Comoras</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="KP">Corea del Norte</option><option value="KR">Corea del Sur</option><option value="CR">Costa Rica</option><option value="CI">Costa de Marfil</option><option value="HR">Croacia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Dinamarca</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="EC">Ecuador</option><option value="EG">Egipto</option><option value="SV">El Salvador</option><option value="AE">Emiratos Árabes Unidos</option><option value="ER">Eritrea</option><option value="SK">Eslovaquia</option><option value="SI">Eslovenia</option><option value="ES">España</option><option value="US">Estados Unidos (EEUU)</option><option value="EE">Estonia</option><option value="ET">Etiopía</option><option value="PH">Filipinas</option><option value="FI">Finlandia</option><option value="FJ">Fiyi</option><option value="FR">Francia</option><option value="GA">Gabón</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Granada</option><option value="GR">Grecia</option><option value="GL">Groenlandia</option><option value="GP">Guadalupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GF">Guayana Francesa</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Ecuatorial</option><option value="GW">Guinea-Bisáu</option><option value="GY">Guyana</option><option value="HT">Haití</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungría</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IQ">Irak</option><option value="IR">Irán</option><option value="IE">Irlanda</option><option value="BV">Isla Bouvet</option><option value="NF">Isla Norfolk</option><option value="SH">Isla Santa Elena</option><option value="IM">Isla de Man</option><option value="CX">Isla de Navidad</option><option value="IS">Islandia</option><option value="AX">Islas Åland</option><option value="KY">Islas Caimán</option><option value="CC">Islas Cocos</option><option value="CK">Islas Cook</option><option value="FO">Islas Feroe</option><option value="GS">Islas Georgias y Sandwich del Sur</option><option value="HM">Islas Heard y McDonald</option><option value="FK">Islas Malvinas</option><option value="MP">Islas Marianas del Norte</option><option value="MH">Islas Marshall</option><option value="SB">Islas Salomón</option><option value="TC">Islas Turcas y Caicos</option><option value="VG">Islas Vírgenes (Británicas)</option><option value="VI">Islas Vírgenes (EEUU)</option><option value="UM">Islas de ultramar menores de Estados Unidos (EEUU)</option><option value="IL">Israel</option><option value="IT">Italia</option><option value="JM">Jamaica</option><option value="JP">Japón</option><option value="JE">Jersey</option><option value="JO">Jordania</option><option value="KZ">Kazajistán</option><option value="KE">Kenia</option><option value="KG">Kirguistán</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesoto</option><option value="LV">Letonia</option><option value="LB">Líbano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Luxemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia del Norte</option><option value="MG">Madagascar</option><option value="MY">Malasia</option><option value="MW">Malaui</option><option value="MV">Maldivas</option><option value="ML">Malí</option><option value="MT">Malta</option><option value="MA">Marruecos</option><option value="MQ">Martinica</option><option value="MU">Mauricio</option><option value="MR">Mauritania</option><option value="YT">Mayotte</option><option value="MX">México</option><option value="FM">Micronesia</option><option value="MD">Moldavia</option><option value="MC">Mónaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Níger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Noruega</option><option value="NC">Nueva Caledonia</option><option value="NZ">Nueva Zelanda</option><option value="OM">Omán</option><option value="NL">Países Bajos</option><option value="PK">Pakistán</option><option value="PA">Panamá</option><option value="PG">Papúa Nueva Guinea</option><option value="PY">Paraguay</option><option value="PE">Perú</option><option value="PN">Pitcairn</option><option value="PF">Polinesia Francesa</option><option value="PL">Polonia</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="GB">Reino Unido (UK)</option><option value="CF">República Centroafricana</option><option value="CZ">República Checa</option><option value="DO">República Dominicana</option><option value="RE">Reunión</option><option value="RW">Ruanda</option><option value="RO">Rumania</option><option value="RU">Rusia</option><option value="EH">Sahara Occidental</option><option value="WS">Samoa</option><option value="AS">Samoa Americana</option><option value="BL">San Bartolomé</option><option value="KN">San Cristóbal y Nieves</option><option value="SM">San Marino</option><option value="MF">San Martín (parte de Francia)</option><option value="SX">San Martín (parte de Holanda)</option><option value="PM">San Pedro y Miquelón</option><option value="VC">San Vicente y las Granadinas</option><option value="LC">Santa Lucía</option><option value="ST">Santo Tomé y Príncipe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leona</option><option value="SG">Singapur</option><option value="SY">Siria</option><option value="SO">Somalia</option><option value="LK">Sri Lanka</option><option value="SZ">Suazilandia</option><option value="ZA">Sudáfrica</option><option value="SD">Sudán</option><option value="SS">Sudán del Sur</option><option value="SE">Suecia</option><option value="CH">Suiza</option><option value="SR">Surinam</option><option value="SJ">Svalbard y Jan Mayen</option><option value="TH">Tailandia</option><option value="TW">Taiwán</option><option value="TZ">Tanzania</option><option value="TJ">Tayikistán</option><option value="IO">Territorio Británico del Océano Índico</option><option value="PS">Territorios Palestinos</option><option value="TF">Territorios australes franceses</option><option value="TL">Timor Oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad y Tobago</option><option value="TN">Túnez</option><option value="TM">Turkmenistán</option><option value="TR">Turquía</option><option value="TV">Tuvalu</option><option value="UA">Ucrania</option><option value="UG">Uganda</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistán</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis y Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabue</option></select>
        </p> 

        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="billing_postcode">
        <label for="Código postal"><?php _e( 'Código postal', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_postcode" id="billing_postcode" placeholder="Código postal" value="<?php echo esc_attr( $user->billing_postcode ); ?>" />
        </p>

        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="billing_city">
        <label for="Ciudad"><?php _e( 'Ciudad', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_city" id="billing_city" placeholder="Ciudad" value="<?php echo esc_attr( $user->billing_city ); ?>" />

        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="user_registration_input_box_1608232531747">
        <label for="user_registration_input_box_1608232531747"><?php _e( 'user_registration_input_box_1608232531747', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="user_registration_input_box_1608232531747" id="user_registration_input_box_1608232531747" value="<?php echo esc_attr( $user->user_registration_input_box_1608232531747 ); ?>" placeholder="Teléfono"/>
        </p>         

    <?php
}


add_action( 'woocommerce_save_account_details', 'save_data_account_details', 10, 1 );
function save_data_account_details( $user_id ) {
    // For Favorite color
    if( isset( $_POST['billing_postcode'] ) )
        update_user_meta( $user_id, 'billing_postcode', sanitize_text_field( $_POST['billing_postcode'] ) );

    if( isset( $_POST['billing_country'] ) )
        update_user_meta( $user_id, 'billing_country', sanitize_text_field( $_POST['billing_country'] ) ); 

    if( isset( $_POST['billing_city'] ) )
        update_user_meta( $user_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );     

    if( isset( $_POST['user_registration_input_box_1607537722'] ) )
        update_user_meta( $user_id, 'user_registration_input_box_1607537722', sanitize_text_field( $_POST['user_registration_input_box_1607537722'] ) );  

    if( isset( $_POST['user_registration_input_box_1608232531747'] ) )
        update_user_meta( $user_id, 'user_registration_input_box_1608232531747', sanitize_text_field( $_POST['user_registration_input_box_1608232531747'] ) );                    

    // For Billing email (added related to your comment)
    if( isset( $_POST['account_email'] ) )
        update_user_meta( $user_id, 'billing_email', sanitize_text_field( $_POST['account_email'] ) );
}
