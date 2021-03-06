<div class="co2ok_container" data-cart="<?php echo $cart ?>">

    <span class="co2ok_checkbox_container <?php echo ($co2_ok_session_opted == 1 ? 'selected' : 'unselected' )?>">
        <?php
            woocommerce_form_field('co2ok_cart', array(
                'type' => 'checkbox',
                'id' => 'co2ok_cart',
                'class' => array('co2ok_cart'),
                'required' => false,
            ), $co2_ok_session_opted);
        ?>

        <div id="checkbox_label">
          <div class="inner_checkbox_label">
            <div id="checkbox">

            </div>

              <?php // TODO: Replace text with static vars ?>

              <?php echo __( 'Make ', 'co2ok-for-woocommerce' );
                  echo co2ok_plugin_woocommerce\Components\Co2ok_HelperComponent::RenderImage('images/logo.svg', 'co2ok_logo', 'co2ok_logo');
              ?>
              <span class="compensation_amount">+<?php echo $currency_symbol.''. $surcharge ?> </span>
          </div>
        </div>
    </span>


    <span class="co2ok_payoff">
      <?php // TODO: Replace text with static vars ?>

        <?php
            echo  __( 'Make my purchase climate neutral', 'co2ok-for-woocommerce' );
            ?>
        <span id="p">
            <?php echo co2ok_plugin_woocommerce\Components\Co2ok_HelperComponent::RenderImage('images/info.svg', 'co2ok_info', 'co2ok_info'); ?>
        </span>
    </span>


    <div class="co2ok_infobox_container">

        <div class="inner-wrapper">
          <p class="text-block greyBorder"><?php echo __('During manufacturing and shipping of products, greenhouse gases are emitted',  'co2ok-for-woocommerce' );?></p>
          <?php echo co2ok_plugin_woocommerce\Components\Co2ok_HelperComponent::RenderImage('images/fout.svg', 'svg-img', '  co2ok_info_hover_image'); ?>
        </div>

        <div class="inner-wrapper">
          <?php echo co2ok_plugin_woocommerce\Components\Co2ok_HelperComponent::RenderImage('images/even.svg', 'svg-img', '  co2ok_info_hover_image'); ?>
          <p class="text-block greyBorder"><?php echo __('We make sure the same amount of emissions is prevented',  'co2ok-for-woocommerce' );?></p>
        </div>

        <div class="inner-wrapper">
          <p class="text-block"><?php echo __('This way, your purchase is climate neutral!',  'co2ok-for-woocommerce' );?></p>
        </div>

        <a target="_blank" href="http://co2ok.eco"><?php echo co2ok_plugin_woocommerce\Components\Co2ok_HelperComponent::RenderImage('images/logo.svg', 'co2ok_logo', 'co2ok_logo'); ?></a>
        <span> <a target="_blank" href="http://www.co2ok.eco/co2-compensatie"><?php
            echo  __( 'How CO&#8322; compensation works', 'co2ok-for-woocommerce' );
            ?></a> </span>
    </div>


</div>
