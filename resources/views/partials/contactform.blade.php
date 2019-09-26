<?php if ( is_page( 'Billing/Revenue Cycle Review') ): 
        $billingSelect = 'selected="selected"'; 
    elseif ( is_page( 'Provider Enrollment') ):
        $providerSelect = 'selected="selected"';
    elseif ( is_page( 'Managed Care & Insurance Contracting Assistance') ):
        $managedcareSelect = 'selected="selected"'; 
    elseif ( is_page( 'Practice Statistical & Financial Budget Development') ):
        $practicestatSelect = 'selected="selected"';
    elseif ( is_page( 'Managed Care &amp; Insurance Contracting Assistance') ):
        $managedcareSelect = 'selected="selected"';
    elseif ( is_page( 'E&M Leveling Review') ):
        $emSelect = 'selected="selected"';
    elseif ( is_page( 'Coding and Chart Review') ):
        $chartreviewSelect = 'selected="selected"';
    elseif ( is_page( 'Business Office Assessment') ):
        $officeSelect = 'selected="selected"';
    endif;
?>

<?php if ( is_page( 'Special Projects') ): 
    $hideSelect = 'hidden'; 
    $specialSelect = 'selected="selected"';
    endif; 
?>

<form class="flex flex-wrap pt-8">
    <div class="w-full lg:w-1/3 pb-6 lg:pr-5">
        <label class="w-full font-oswald text-xl">Full Name</label>
        <input type="text" class="w-full font-open p-2 border-2 border-color-85c879" required>
    </div>
    <div class="w-full lg:w-1/3 pb-6 lg:pr-5">
        <label class="w-full font-oswald text-xl">Email</label>
        <input type="email" class="w-full font-open p-2 border-2 border-color-85c879" required>
    </div>
    <div class="w-full lg:w-1/3 pb-6 lg:pr-5">
        <label class="w-full font-oswald text-xl">Phone</label>
        <input type="tel" class="w-full font-open p-2 border-2 border-color-85c879" required>
    </div>
    
    <div class="w-full pt-5 lg:pr-5 <?php echo $hideSelect ?>">
        <label class="w-full font-oswald text-xl leading-none">Which service are you interested in?</label>
        <select class="w-full font-open text-xl p-2 border-2 border-color-85c879" required>
        <option name="Billing/Revenue Cycle Review" <?php echo $billingSelect ?>>Billing/Revenue Cycle Review</option>
        <option name="Provider Enrollment" <?php echo $providerSelect ?>>Provider Enrollment</option>
        <option name="Managed Care &amp; Insurance Contracting Assistance" <?php echo $managedcareSelect ?>>Managed Care &amp; Insurance Contracting Assistance</option>
        <option name="Practice Statistical &amp; Financial Budget Development" <?php echo $practicestatSelect ?>>Practice Statistical &amp; Financial Budget Development</option>
        <option name="E&amp;M Leveling Review" <?php echo $emSelect ?>>E&amp;M Leveling Review</option>
        <option name="Coding and Chart Review" <?php echo $chartreviewSelect ?>>Coding and Chart Review</option>
        <option name="Business Office Assessment" <?php echo $officeSelect ?>>Business Office Assessment</option>
        <option class="hidden" name="Special Project" <?php echo $specialSelect ?>>Special Project</option>
        </select>
    </div>
    <div class="w-full pt-5 lg:pr-5">
        <label class="w-full font-oswald text-xl">
        
        <?php if ( is_page( 'Special Projects') ): 
            echo 'Tell us more about your project'; 
            else: 
            echo 'What would you like to know?'; 
            endif; 
        ?>
        
        </label>
        <textarea class="w-full h-32 font-open p-2 border-2 border-color-85c879"></textarea>
    </div>
    <input type="submit" value="submit" class="w-full lg:w-auto font-open uppercase border-4 text-base border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer mt-4 p-4 lg:p-2 hero-button">
</form>