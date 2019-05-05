<div class="wrapper shadow">
  <nav id="sidebar">
    {{-- =============== TODO =====================  --}}
    {{-- CONFIRMAR OS SIMBOLOS E NOMES COM OS PROFESSORES --}}
    {{-- P1 ================================================  --}}
    <div class="container mt-2" class="p1_form">
      <div class="row p-2">
        <h5>Propriedades do Feixe</h5>
      </div>
      <div class="row p-2">
        <div class="form-group">
          <label for="input_type">Selecione o tipo de Feixe:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>Tipo 1</option>
            <option>Tipo 2</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o usuário.</small>
        </div>
        <div class="form-group">
          <label for="select_propriedade">Propriedade:</label>
          <select class="form-control form-control-sm" id="select_propriedade">
            <option>Força</option>
            <option>Campo</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o usuário.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">&lambda;</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="&lambda; em (nM)">
          <small id="emailHelp" class="form-text text-muted">- Comprimento da Onda</small>
        </div>
      </div>
      <div class="row p-2">
        <h5>Propriedades da Particula</h5>
        <div class="form-group">
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Raio: a (pw)">
          <small id="emailHelp" class="form-text text-muted">Confirmar escritos com os profs.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Permissividade (&#949; / &#949;0)</label>
          <div class="form-row">
            <div class="col-6">
              <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Real">  
            </div>
            <div class="col-6">
              <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="descobrir o que está escrito">  
            </div>
          </div>
          <small id="emailHelp" class="form-text text-muted">Confirmar escritos com os profs.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Permeabilidade (&#978; / &#978;0)</label>
          <div class="form-row">
            <div class="col-6">
              <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
            </div>
            <div class="col-6">
              <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
            </div>
          </div>
          <small id="emailHelp" class="form-text text-muted">Confirmar o símbolo.</small>
        </div>
      </div>




      {{-- PARTE 2 ==============================  --}}


      <div class="row p-2">
        (a) - se for feixe de gaus
        <div class="form-group">
          <label for="exampleInputEmail1">&#969;0</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Confirmar o símbolo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">&#962;0</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Confirmar o símbolo.</small>
        </div>
      </div>

      <div class="row p-2">
        (b) - se for feixe de bessel
        <div class="form-group">
          <label for="exampleInputEmail1">&#945;</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Confirmar o símbolo.</small>
        </div>
      </div>


      <div class="row p-2">
        (c) - se for Frozen Wave
        <div class="form-group">
          <label for="exampleInputEmail1">Q:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">L:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">N:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Zmin:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Zmax:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">F(z):</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>Constante</option>
            <option>Exponencial</option>
            <option>Outros</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
      </div>
      
      <div class="row p-2">
        (se for exponencial)
        <div class="form-group">
          <label for="exampleInputEmail1">q:</label>
          <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
      </div>
      <div class="row p-2">
        (se for se for outros)
        <div class="form-group">
          <label for="exampleInputEmail1">Formato:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>Python</option>
            <option>Matlab</option>
            <option>MTX</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="form-control custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Escolher arquivo</label>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Insira o código manualmente</label>
          <textarea class="form-control form-cotrol-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <div class="row p-2">
        <h5>Formato de saída</h5>
        <div class="form-group">
          <label for="exampleInputEmail1">Formato:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>MTX</option>
            <option>Gráficos</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Optical Force:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>MTX</option>
            <option>Gráficos</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Electromagnetic Field:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>Opt 1</option>
            <option>Opt 2</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
      </div>

      <div class="row p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">Type:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>1D</option>
            <option>Density Plot</option>
            <option>3 D</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Direction:</label>
          <select class="form-control form-control-sm" id="input_type">
            <option>Opt 1</option>
            <option>Opt 2</option>
          </select>
          <small id="emailHelp" class="form-text text-muted">Informações para o campo.</small>
        </div>
      </div>
      <div class="row p-2 pb-5">
        <button type="submit" class="btn btn-primary form-control">+ Add</button>
        <small id="emailHelp" class="form-text text-muted">Clique para começar a Simulação.</small>
      </div>
      {{-- fechamento do container ===== --}}
    </div>
    
{{-- <ul class="list-unstyled components">
    <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-plus mr-1"></i> Nova Simulação</a>

        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <div>
                    <div class="row">
                        <select class="form-control form-control-sm">
                          <option>Default select</option>
                      </select>
                  </div>
              </div>
          </li>
          <li>
            <p>Formulário 2</p>
        </li>
        <li>
            <p>Formulário 3</p>
        </li>
        <li>
            <p>Formulário 4</p>
        </li>
    </ul>

</li>
<li>
    <a href="#"><i class="fas fa-folder-open mr-1"></i> Minhas simulações</a>
</li>
<li>
    <a href="#"><i class="fas fa-cog mr-1"></i> Configurações</a>
</li>
<li>
    <a href="#"><i class="fas fa-heart mr-1"></i> Sobre o App</a>
</li>
<li>
    <a href="#"><i class="fas fa-life-ring mr-1"></i> Suporte</a>
</li>
</ul> --}}
</nav>
</div>