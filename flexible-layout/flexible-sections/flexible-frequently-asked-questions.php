<?php 
    $frequently_asked_questions = get_sub_field('frequently_asked_questions');
    if(!empty($frequently_asked_questions)):
?>
        <section class="paving-faqs faqs-page">
            <div class="container">
                <ul class="outer-custom-accordian" id="faq">
                    
                        <?php
                            foreach($frequently_asked_questions as $row):
                                $category_name = $row['category_name'];
                                $faqs = $row['faqs'];
                                $categorySlug = strtolower(str_replace(' ','',preg_replace('/[^A-Za-z0-9 ]/', '', $category_name)));
                                ?>
                                        <li class="faq-item">
                                            <a href="javascript:void(0);" class="outeraccor-title" data-item="<?php echo $categorySlug; ?>" title="<?php echo $category_name; ?>"><?php echo $category_name; ?> <span></span></a>
                                                <div class="outeraccor-des" data-item="<?php echo $categorySlug; ?>">
                                                    <ul class="custom-according">
                                                        <?php
                                                            foreach($faqs as $fq):
                                                                $question = $fq['question'];
                                                                $answer = $fq['answer'];
                                                                ?>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="accor-title" title="<?php echo $question;?>"><?php echo $question;?> <span></span></a>
                                                                        <div class="accor-des"><?php echo $answer;?></div>
                                                                    </li>
                                                                <?php
                                                            endforeach;
                                                        ?>
                                                    </ul>
                                                </div>
                                        </li>
                                <?php
                            endforeach;
                        ?>
                    
                </ul>		
            </div>
        </section>
<?php endif;?>