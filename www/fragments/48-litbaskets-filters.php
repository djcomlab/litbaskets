<div id="litbaskets-filters" style="display: none; width: 90%; max-width: 90rem; margin: 0 auto; padding: 1rem;">
	<h1>Filters</h1>

	<form class="form-horizontal">
		<div class="form-group">
			<label for="reviews_only_switch" class="col-sm-2 control-label">Reviews only</label>
			<div class="col-sm-10">
				<input class="bootstrap-switch" id="reviews_only_switch" type="checkbox" 
					onchange="GLOBAL_FILTERS_CONTROLLER.user_did_change_type_filters('REVIEWS')"
				>
				<span class="help-block">
					This filters the resulting Scopus search to only include Review papers.
				</span>
			</div>
		</div>
		<div class="form-group">
			<label for="editorials_only_switch" class="col-sm-2 control-label">Editorials only</label>
			<div class="col-sm-10">
				<input class="bootstrap-switch" id="editorials_only_switch" type="checkbox" 
					onchange="GLOBAL_FILTERS_CONTROLLER.user_did_change_type_filters('EDITORIALS')"
				>
				<span class="help-block">
					This filters the resulting Scopus search to only include Editorial papers.
					Selecting only editorials is a good filter for identifying special issues.
				</span>
			</div>
		</div>
		<div class="form-group">
			<label for="minimum_year" class="col-sm-2 control-label">Limit by year</label>
			<div class="col-sm-10">
				<input class="bootstrap-switch" id="limit_years_switch" type="checkbox" 
					onchange="GLOBAL_FILTERS_CONTROLLER.check_limit_years_switch()" checked
				>
				
				<span style="margin-left: 3rem; display: inline-block;">
					published after
				</span>
				<span style="display: inline-block;">
					<input class="form-control" id="limit_years_data" onkeyup="GLOBAL_FILTERS_CONTROLLER.check_limit_years_data()" type="number"
						style="max-width: 10rem; border-top: none; border-left: none; border-right: none; box-shadow: none;"
					/>
				</span>
				<span class="help-block">
					This filters the resulting Scopus search to only include papers published after a certain year.
				</span>
			</div>
		</div>
	</form>
</div>