<div>
    
    <fieldset>

<!-- Form Name -->
    <legend>Inscripcion Pregrado</legend>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label">Nombres</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="nombres" placeholder="Nombres" class="form-control"  type="text">
          </div>
        </div>
    </div>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label" >Apellido Paterno</label> 
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="apellido_paterno" placeholder="Apellido Paterno" class="form-control"  type="text">
          </div>
        </div>
    </div>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label" >Apellido Materno</label> 
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="apellido_materno" placeholder="Apellido Materno" class="form-control"  type="text">
          </div>
        </div>
    </div>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label" >Fecha de nacimiento</label> 
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="f_nac" placeholder="Fecha de nacimiento" class="form-control"  type="date">
          </div>
        </div>
    </div>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label" >DNI</label> 
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="dni" placeholder="DNI" class="form-control"  type="text">
          </div>
        </div>
    </div>

<!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail Address" class="form-control"  type="email">
          </div>
        </div>
    </div>


<!-- Text input-->
       
    <div class="form-group">
        <label class="col-md-4 control-label">Nº Telefónico</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="tel" placeholder="(062)511212" class="form-control" type="text">
          </div>
        </div>
    </div>

<!-- Text input-->
       
    <div class="form-group">
        <label class="col-md-4 control-label">Nº Celular</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="cel" placeholder="962511212" class="form-control" type="text">
          </div>
        </div>
    </div>

<!-- Text input-->
      
    <div class="form-group">
        <label class="col-md-4 control-label">Departamento de Nacimiento</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            {!!Form::select('departamento',$departamentos,null,['required','id'=>'departamento', 'class'=>'form-control selectpicker','placeholder' => 'Departamento'])!!}
          </div>
        </div>
    </div>

<!-- Text input-->
 
    <div class="form-group">
        <label class="col-md-4 control-label">Provincia de Nacimiento</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            {!!Form::select('provincia',$provincias,null,['required','id'=>'provincia_nac', 'class'=>'form-control selectpicker','placeholder' => 'Provincia'])!!}
          </div>
        </div>
    </div>

<!-- Select Basic -->
   
    <div class="form-group"> 
        <label class="col-md-4 control-label">Distrito de Nacimiento</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            {!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'form-control selectpicker','placeholder' => 'Distrito'])!!}
          </div>
      </div>
    </div>

<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label">Domicilio</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="domicilio" placeholder="Domicilio" class="form-control"  type="text">
          </div>
      </div>
    </div>

<!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label">Website or domain name</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
            <input name="website" placeholder="Website or domain name" class="form-control" type="text">
          </div>
        </div>
    </div>

<!-- radio checks -->
    <div class="form-group">
            <label class="col-md-4 control-label">Do you have hosting?</label>
            <div class="col-md-4">
                <div class="radio">
                    <label>
                        <input type="radio" name="hosting" value="yes" /> Yes
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="hosting" value="no" /> No
                    </label>
                </div>
            </div>
        </div>

<!-- Text area -->
  
    <div class="form-group">
        <label class="col-md-4 control-label">Project Description</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
          </div>
        </div>
    </div>

<!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>

    </fieldset>  
</div>