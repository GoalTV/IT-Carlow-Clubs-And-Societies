  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="/img/banners/it_carlow_societies.jpg"
                alt="IT Carlow Societies"
                class="img-fluid"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Clubs & Societies Sign Up</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="f_name" class="form-control form-control-lg" />
                      <label class="form-label" for="f_name">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="l_name" class="form-control form-control-lg" />
                      <label class="form-label" for="l_name">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" id="password" class="form-control form-control-lg" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" id="confirm_password" class="form-control form-control-lg" />
                      <label class="form-label" for="confirm_password">Confirm Password</label>
                    </div>
                  </div>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="1"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="3"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>


                <div class="form-outline mb-4">
                  <input type="date" id="dob" class="form-control form-control-lg" />
                  <label class="form-label" for="dob">Date of Birth</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="s_id" class="form-control form-control-lg" />
                  <label class="form-label" for="s_id">Student ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Student Email</label>
                </div>

                <div class="form-outline mb-4">
                <div class="phone-list">
				
					<div class="input-group phone-input">
						<span class="input-group-btn">
							<input type="number" name="p_country" id="p-country" value="353" class="form-control">
						</span>
						<input type="text" id="p_number" name="p_number" class="form-control" placeholder="0871234567" />
					</div>
</div>
                <label class="form-label" for="phone">Phone Number</label>
              </div>
                <div class="form-group">
                <input type="file" id="photo" class="form-control form-control-lg">
                <label for="formFile" class="form-label">Student Photo</label>
                </div>

                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Medical Declaration
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Asthma, wheezing, Respiratory?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_1" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_1" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Bronchitis and/or shortness of breath?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_2" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_2" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Physical disability or other disability?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_3" value="0">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_3" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Are you pregnant?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_4" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_4" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Do you smoke?   
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_5" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_5" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Epilepsy, seizures, fainting attacks or convulsions?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_6" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_6" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any other neurological problem?  
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_7" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_7" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Recurring migraine headaches, Blackouts?  
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_8" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_8" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Recurring joint, mobility or back problems/surgery?  
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_9" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_9" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Diabetes?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_10" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_10" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any hearing loss or problems with balance?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_11" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_11" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any serious eyesight issues?
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_12" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_12" value="0">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Drug or alcohol dependency?      
    <span>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_13" value="1">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input" name="optionsRadios" id="m_d_13" value="0">
         No
        </label>
    </span>
  </li>
</ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Medical Conditions
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="form-group">
      <label for="m_c">Please Provide any Medical Condiotions if any</label>
      <textarea class="form-control" id="m_c" rows="14"></textarea>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Emergancy Contact
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <div class="form-outline">
                      <input type="text" id="d_i_n" class="form-control form-control-lg" />
                      <label class="form-label" for="d_i_n">Doctor's Full Name</label>
                    </div>

                    <div class="form-outline mb-4">
                <div class="phone-list">
				
					<div class="input-group phone-input">
						<span class="input-group-btn">
							<input type="number" name="d_i_p_c" id="d_i_p_c" value="353" class="form-control">
						</span>
						<input type="text" id="d_i_p_n" name="d_i_p_n" class="form-control" placeholder="0871234567" />
					</div>
</div>
                <label class="form-label" for="phone">Doctor's Phone Number</label>
              </div>

              <div class="form-outline">
                      <input type="text" id="n_o_k_f_n" class="form-control form-control-lg" />
                      <label class="form-label" for="n_o_k_f_n">Next of Kim First Name</label>
                    </div>

                    <div class="form-outline">
                      <input type="text" id="n_o_k_l_n" class="form-control form-control-lg" />
                      <label class="form-label" for="n_o_k_l_n">Next of Kim Last Name</label>
                    </div>

                    <div class="form-outline mb-4">
                <div class="phone-list">
				
					<div class="input-group phone-input">
						<span class="input-group-btn">
							<input type="number" name="n_o_k_p_c" id="n_o_k_p_c" value="353" class="form-control">
						</span>
						<input type="text" id="n_o_k_p_n" name="n_o_k_p_n" class="form-control" placeholder="0871234567" />
					</div>
</div>
                <label class="form-label" for="phone">Next of Kim Phone Number</label>
              </div>

              <div class="form-outline">
                      <input type="text" id="n_o_k_r_s" class="form-control form-control-lg" />
                      <label class="form-label" for="n_o_k_l_n">Next of Kim Relationship</label>
                    </div>

    </div>
    </div>
  </div>
</div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2">Register</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>