<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header"><h6 style="background-color:white;">Adverts</h6></div>

                <div class="card-body">	
				 <?php for($x = 0; $x < count($vacancies); $x++): ?>
				 
				 <div class="card" style="">
					  <div class="card-body">
					   <?php $clicks = app('App\Models\Click'); ?>
						  <?php
							$click_ref = $clicks->getRef($vacancies[$x]->vacancy_ref );
					    ?>
					    <h5 class="card-title"><?php echo e($vacancies[$x]->company_ref); ?></h5>
					    <h6 class="card-title">Ref:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($vacancies[$x]->vacancy_ref); ?></h6>
					    <h6 class="card-title">Title:&nbsp;&nbsp;&nbsp;&nbsp;
					    <a href="https://webapp.placementpartner.com/wi/application_form.php?id=<?php echo e($vacancies[$x]->company_ref); ?>&vacancy_ref=<?php echo e($vacancies[$x]->vacancy_ref); ?>&source=assessment"target="blank"data-id="<?php echo e($click_ref); ?>"class="click-call">
					    <?php echo e($vacancies[$x]->job_title); ?></a></h6>
					    <h6 class="card-title">Expiry:&nbsp;&nbsp;<?php echo e($vacancies[$x]->expiry_date); ?></h6>
					    <p class="card-text"><?php echo html_entity_decode($vacancies[$x]->brief_description ); ?></p>											 
						<a href="https://webapp.placementpartner.com/wi/application_form.php?id=<?php echo e($vacancies[$x]->company_ref); ?>&vacancy_ref=<?php echo e($vacancies[$x]->vacancy_ref); ?>&source=assessment"target="blank"data-id="<?php echo e($click_ref); ?>"class="click-call btn btn-info btn-sm">
						   Apply 
						</a>
					  </div>
				</div>
				 <?php endfor; ?>
	   
		</div>
	
	
           </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\parallel\resources\views/adverts/index.blade.php ENDPATH**/ ?>