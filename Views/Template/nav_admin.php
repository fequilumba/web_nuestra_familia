    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Fausto Quilumba</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>

      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label">Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
            <span class="app-menu__label">Usuarios</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                <i class="icon fa fa-user"></i> Usuarios
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/roles">
                <i class="icon fa fa-male"></i> Roles
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-hospital-o" aria-hidden="true"></i>
            <span class="app-menu__label">Hospital</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/historia">
                <i class="icon fa fa-history"></i> Historia
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/misionVision">
                <i class="icon fa fa-bullseye"></i> Misión/Visión
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-bed" aria-hidden="true"></i>
            <span class="app-menu__label">Guía del Paciente</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroPac">
                <i class="icon fa fa-wheelchair-alt"></i> Registrar Paciente
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-bed" aria-hidden="true"></i>
            <span class="app-menu__label">Guía del Paciente</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroCli">
                <i class="icon fa fa-user-o"></i> Registrar Cliente
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroPac">
                <i class="icon fa fa-wheelchair-alt"></i> Registrar Paciente
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-user-md" aria-hidden="true"></i>
            <span class="app-menu__label">Guía del Médico</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroMed">
                <i class="icon fa fa-stethoscope"></i> Registrar Médico
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroEsp">
                <i class="icon fa fa-circle-o"></i> Especialidades
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/registroTiExa">
                <i class="icon fa fa-heartbeat"></i> Tipo Examen
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/examen">
                <i class="icon fa fa-heart-o"></i> Examen
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/medicamentos">
                <i class="icon fa fa-medkit"></i> Medicamentos
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/horarios">
                <i class="icon fa fa-clock-o"></i> Horarios
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-address-book" aria-hidden="true"></i>
            <span class="app-menu__label">Mi Agenda</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/verAgenda">
                <i class="icon fa fa-address-book-o"></i> Ver Agenda
              </a>
            </li>

            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/citaAtendida">
                <i class="icon fa fa-plus-square-o"></i> Citas Atendidas
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-calendar" aria-hidden="true"></i>
            <span class="app-menu__label">Citas</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/agendarCitaCliente">
                <i class="icon fa fa-calendar-check-o"></i> Agendar
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-calendar" aria-hidden="true"></i>
            <span class="app-menu__label">Citas</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/agendarCitaAdmin">
                <i class="icon fa fa-calendar-check-o"></i> Agendar
              </a>
            </li>
          </ul>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/cancelarCita">
                <i class="icon fa fa-calendar-times-o"></i> Cancelar
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-eye" aria-hidden="true"></i>
            <span class="app-menu__label">Visualizar</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/verHistorial">
                <i class="icon fa fa-files-o"></i> Historial
              </a>
            </li>
          </ul>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/verRecetas">
                <i class="icon fa fa-file-o"></i> Recetas
              </a>
            </li>
          </ul>

          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/verExamen">
                <i class="icon fa fa-file-text-o"></i> Exámenes
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/contactos">
            <i class="app-menu__icon fa fa-phone" aria-hidden="true"></i>
            <span class="app-menu__label">Contactos</span>
          </a>
        </li>
      </ul>
    </aside>