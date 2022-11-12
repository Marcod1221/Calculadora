import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { BeforeLoginService } from './services/before-login.service';
import { AfterLoginService } from './services/after-login.service';
import { CaculadoraComponent } from './datos/caculadora/caculadora.component';

const appRoutes: Routes = [
    {path: 'login', component: LoginComponent, canActivate: [BeforeLoginService]},
    {path: 'calculadora/:id', component: CaculadoraComponent, canActivate: [AfterLoginService]}
];

@NgModule({
  imports: [RouterModule.forRoot(appRoutes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
