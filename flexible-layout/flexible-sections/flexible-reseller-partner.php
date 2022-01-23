<?php 
    $show_hide_reseller_partner = get_sub_field('show_hide_reseller_partner');
    if($show_hide_reseller_partner == "1"):  
        $form_title = get_sub_field('form_title');    
        $taxonomy = "reseller_partner_states";
        $reseller_partner_states_terms = get_terms([
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
        ]);
        $currentState = (isset($_COOKIE['statecookie']) ? $_COOKIE['statecookie'] : ""); // get current state from cookie
        $description = '';
        // get state wise content here
        if(!empty($reseller_partner_states_terms)):
            foreach($reseller_partner_states_terms as $state):
                $stateName = $state->slug;
                // check current state
                if($stateName == $currentState):
                    $description .= $state->description;
                else:
                    $description .= "";
                endif;
            endforeach;
        endif;
?>
<!-- flexible section same as mega page but i added 'reseller-page' class for reseller page only -->
        <section class="where-buy-retailer reseller-page">
            <div class="container">
                <?php echo (!empty($description) ? '<p>'.$description.'</p>' : ''); ?>
                <div class="retailer-form">
                    <?php echo (!empty($form_title) ? '<h5>'.$form_title.'</h5>' : ''); ?>                   
                    <!-----------Reseller Form Start-------------->
                    <?php  $distanceArray = array('5km'=>5, '10km'=>10, '25km'=>25, '50km'=>50, '100km'=>100); ?>
                    <form method="post" id="reseller-partners" class="reseller-partners">
                        <div class="row">
                            <div class="col_6">
                                <label for="pincode">Postcode</label>
                                <input type="text" name="pincode" class="pincode inputhover-state"  id="pincode" value="<?php echo (isset($_GET['pincode']) ? $_GET['pincode'] : '');?>" required="required" />
                            </div>
                            <div class="col_6">
                                <label for="distance">Set Distance</label>
                                <select id="distance" class="distance inputhover-state" name="distance" required="required">
                                    <!-- value="10" -->
                                    <option ></option>
                                    <?php
                                        foreach($distanceArray as $key=>$val):
                                            echo '<option value="'.$val.'" '.((isset($_GET['distance']) && $_GET['distance']==$val) ?'selected' : '' ).' >'.$key.'</option>';
                                        endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="col_6">
                                &nbsp;
                             </div>
                             <div class="col_6">
                                <input type="hidden" name="currentState" class="currentState" value="<?php echo (!empty($currentState) ? $currentState : ''); ?>" /> <!-- */ get current state-->                            
                                <!-- <input type="submit" value="Search" name="search" class="search"> -->
                                <button type="submit" value="Search" name="search" class="search ff-btn-submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <!-----------Reseller Form End-------------->
                </div>
                <figure id="productLoader" style="display:none;">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product-loader.svg"  alt="preloader"  />
                    </div>
                </figure>
                <div class="retailer-list" id="retailer-listing"> <!--Display reseller partner data here-->  </div>
            </div>
        </section>
    <?php endif;?>
