<div class="cliente">

    <div class="nav">
        <h2>GdC.com</h2>
    </div>

    <div class="content">   
        <h2>Clientes</h2>
        <ul class="cliente">
            <?php foreach ($clientes as $cliente): ?>
            <div class="card">
            <li> 
            <?php echo $cliente->nome; ?>
            <div class="buttons_card">
            <a href="/cliente/<?php echo $cliente->idCliente; ?>">
            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 15C22 18.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M10 2C6.22876 2 4.34315 2 3.17157 3.17157C2 4.34315 2 5.22876 2 9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M12 7C9.07268 7 7.08037 8.56222 5.89242 9.94021C5.29747 10.6303 5 10.9754 5 12C5 13.0246 5.29748 13.3697 5.89243 14.0598C7.08038 15.4378 9.07268 17 12 17C14.9273 17 16.9196 15.4378 18.1076 14.0598C18.7025 13.3697 19 13.0246 19 12C19 10.9754 18.7025 10.6303 18.1076 9.94021C17.5723 9.31933 16.8738 8.66106 16 8.12513" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="2" stroke="#1C274C" stroke-width="1.5"/>
            <path d="M10 22C9.65081 22 9.31779 22 9 21.9991M2 15C2 18.7712 2 19.6569 3.17157 20.8284C3.82475 21.4816 4.69989 21.7706 6 21.8985" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M14 2C14.3492 2 14.6822 2 15 2.00093M22 9C22 5.22876 22 4.34315 20.8284 3.17157C20.1752 2.51839 19.3001 2.22937 18 2.10149" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            </a>
            <a href="/cliente/<?php echo $cliente->idUsuario; ?>">
            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.3601 4.07866L15.2869 3.15178C16.8226 1.61607 19.3125 1.61607 20.8482 3.15178C22.3839 4.68748 22.3839 7.17735 20.8482 8.71306L19.9213 9.63993M14.3601 4.07866C14.3601 4.07866 14.4759 6.04828 16.2138 7.78618C17.9517 9.52407 19.9213 9.63993 19.9213 9.63993M14.3601 4.07866L12 6.43872M19.9213 9.63993L14.6607 14.9006L11.5613 18L11.4001 18.1612C10.8229 18.7383 10.5344 19.0269 10.2162 19.2751C9.84082 19.5679 9.43469 19.8189 9.00498 20.0237C8.6407 20.1973 8.25352 20.3263 7.47918 20.5844L4.19792 21.6782M4.19792 21.6782L3.39584 21.9456C3.01478 22.0726 2.59466 21.9734 2.31063 21.6894C2.0266 21.4053 1.92743 20.9852 2.05445 20.6042L2.32181 19.8021M4.19792 21.6782L2.32181 19.8021M2.32181 19.8021L3.41556 16.5208C3.67368 15.7465 3.80273 15.3593 3.97634 14.995C4.18114 14.5653 4.43213 14.1592 4.7249 13.7838C4.97308 13.4656 5.26166 13.1771 5.83882 12.5999L8.5 9.93872" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            </a>
            <a href="/cliente/<?php echo $cliente->idUsuario; ?>">
            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.17065 4C9.58249 2.83481 10.6937 2 11.9999 2C13.3062 2 14.4174 2.83481 14.8292 4" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M20.5 6H3.49988" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5M18.8334 8.5L18.6334 11.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M9.5 11L10 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M14.5 11L14 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            </a>
            </div>
            </li>
            </div>
            <?php endforeach;?>
            </div>
        </ul>
    </div>
</div>