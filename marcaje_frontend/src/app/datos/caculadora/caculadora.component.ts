import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Marcaje } from '../../models/marcaje';

@Component({
  selector: 'app-caculadora',
  templateUrl: './caculadora.component.html',
  styleUrls: ['./caculadora.component.css']
})
export class CaculadoraComponent implements OnInit {

  id= 0;
  marcaje!: FormGroup;

  datos : Marcaje = new Marcaje();

  constructor(
    private route: ActivatedRoute,
  ) {
   }

  ngOnInit(): void {
    this.id = this.route.snapshot.params['id'];

    this.marcaje = new FormGroup({
      distancia: new FormControl('', Validators.required),
      hora: new FormControl('', Validators.required),
      id: new FormControl(this.id, Validators.required)
    });
    
  }

  onSubmit(){
    if (!this.marcaje.valid) {
      return;
    }
  }


}
