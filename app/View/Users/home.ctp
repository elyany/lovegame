
	 <div class="boardgame">



		<h2><?php  echo __('Plateau du jour'); ?></h2>


		<div id="pretendants">
			<ul>
				<?php foreach ($users as $user): ?>
					<div class="pretendant"><li>
						<img src="<?php echo ($user['User']['photo']); ?>" width="250" height="350"  />
					</li></div>
					<li><div class="nompretendant"><?php echo $user['User']['username'];?></div></li>
					
				<?php endforeach ?>
			</ul>
		</div>
	</div>





<div class="profile">
		
	
			<img src="<?php echo ($me['photo']); ?>" width="100" height="100" />
			&nbsp;


			<div id="cagnotte">

				<img src="http://petitcroissant.p.e.pic.centerblog.net/3s2i2aq8.gif" width="80" height="80" />


				<div class="coeurs"><p> <?php echo ($me['coeur']); ?> </p></div>

				

			</div>

			<div id="enveloppe">

				<img src="http://educ73.ac-grenoble.fr/nectar/doucy/image/enveloppe_081217_094306.jpg
" width="90" height="70" />

			<div class="lettres"><p> 3 </p></div>

			</div>


			<?php echo $this->Html->link(__('Voir mon profil'), array('action' => 'view', $me['id'])); ?> 


</div>