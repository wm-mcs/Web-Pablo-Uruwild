@extends('emails.layouts.layout_nuevo')

{{--*/ $Color_principal  = $request->get('Color_principal') /*--}}
{{--*/ $Logo_url         = $request->get('Logo_url') /*--}}
{{--*/ $Color_fondo      = $request->get('Color_fondo')  /*--}}


@section('logo')
 <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:{{$Color_fondo}};background-repeat:repeat;background-position:center top"> 
        <tbody>
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
            <tbody>
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                <tbody>
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:580px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    <tbody>
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:25px;padding-bottom:25px;font-size:0"> 
                        @if($Logo_url != null)
                        <img src="{{$Logo_url}}" alt="" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="150">
                        @endif
                      </td> 
                     </tr> 
                    </tbody>
                   </table></td> 
                 </tr> 
                </tbody>
               </table></td> 
             </tr> 
            </tbody>
           </table></td> 
         </tr> 
        </tbody>
       </table> 
@stop

@section('titulo')
 <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
        <tbody>
         <tr style="border-collapse:collapse"> 
          <td style="padding:0;Margin:0;background-color:{{$Color_fondo}}" bgcolor="{{$Color_fondo}}" align="center"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
            <tbody>
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                <tbody>
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#FFFFFF;border-radius:4px" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff"> 
                    <tbody>
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px;padding-top:35px">

                        <h1 style="Margin:0;line-height:58px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:48px;font-style:normal;font-weight:normal;color:#111111">Contacto</h1>

                      </td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td bgcolor="#ffffff" align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;font-size:0"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                        <tbody>
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0px;border-bottom:1px solid #FFFFFF;background:#FFFFFFnone repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                        </tbody>
                       </table></td> 
                     </tr> 
                    </tbody>
                   </table></td> 
                 </tr> 
                </tbody>
               </table></td> 
             </tr> 
            </tbody>
           </table></td> 
         </tr> 
        </tbody>
       </table> 


@stop



@section('contenido')

                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" bgcolor="#ffffff" align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">Datos de la solicitud.
                        </p>
                      </td> 
                     </tr> 

                     {{-- B o t ó n   e j e m p l o --}}
                     {{-- <tr style="border-collapse:collapse"> 
                      <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:35px;padding-bottom:35px"><span class="es-button-border" style="border-style:solid;border-color:#FFA73B;background:1px;border-width:1px;display:inline-block;border-radius:2px;width:auto"><a href="https://viewstripo.email/" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:20px;color:#FFFFFF;border-style:solid;border-color:#FFA73B;border-width:15px 30px;display:inline-block;background:#FFA73B;border-radius:2px;font-weight:normal;font-style:normal;line-height:24px;width:auto;text-align:center"> Confirm Account</a></span></td> 
                     </tr>  --}}


                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Nombre</strong>: {{$nombre}}
                        </p>

                      </td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Email</strong>: {{$email}}
                        </p>

                      </td> 
                     </tr> 

                     {{-- E j e m p l o   l i n k  --}}
                     {{-- <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px"><a target="_blank" href="https://viewstripo.email/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;text-decoration:underline;color:@if(isset($Color_principal)) {{$Color_principal}} @else @endif">XXX.XXXXXXX.XXX / XXXXXXXXXXXXX</a></td> 
                     </tr>  --}}

                     @if($request->get('pais') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>País</strong>: {{$request->get('pais')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                     @if($request->get('celular') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Celular</strong>: {{$request->get('celular')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                     @if($request->get('nombre_empresa') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Nombre empresa</strong>: {{$request->get('nombre_empresa')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                     @if($request->get('que_vendes') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>¿Qué vendes?</strong>: {{$request->get('que_vendes')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                    @if($request->get('presupuesto') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Presupuesto</strong>: {{$request->get('presupuesto')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                      @if($request->get('tipo_consulta_de_easy') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Tipo</strong>: {{$request->get('tipo_consulta_de_easy')}}
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                      @if($request->get('que_necesitas') != '')
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>¿Qué necesitas?</strong>: <br>
                         
                          <ul style="Margin:0; padding:0;">
                             @foreach($request->get('que_necesitas') as $Necesitas)
                              <li style="Margin:0 0 1em; list-style:disc inside; mso-special-format:bullet; font-size:14px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666;">{{$Necesitas}}</li>
                             @endforeach 
                          </ul>
                        </p>

                      </td> 
                     </tr>                       
                     @endif
                     
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:30px;padding-right:30px;padding-bottom: 40px;">
                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666">
                          <strong>Mensaje</strong>: {{$mensaje}}
                        </p>

                      </td> 
                     </tr>                       
                     



@stop

@section('mas-ayuda')

<table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
        <tbody>
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
            <tbody>
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                <tbody>
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#FFECD1;border-radius:4px" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffecd1"> 
                    <tbody>
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:30px;padding-left:30px;padding-right:30px"><h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#111111">Más información de ...</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#ffa73b" align="center" style="padding:0;Margin:0;padding-bottom:30px;padding-left:30px;padding-right:30px"><a target="_blank" href="{{url()}}" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;text-decoration:underline;color:{{$Color_principal}}">Uruwild</a></td> 
                     </tr> 
                    </tbody>
                   </table></td> 
                 </tr> 
                </tbody>
               </table></td> 
             </tr> 
            </tbody>
           </table></td> 
         </tr> 
        </tbody>
       </table> 

@stop

@section('footer')
<table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
        <tbody>
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
            <tbody>
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:30px;padding-right:30px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                <tbody>
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:540px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    <tbody>
                    {{--  <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#666666"><strong><a target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111">Dashboard</a> - <a target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111">Billing</a> - <a target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111">Help</a></strong></p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:25px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#666666">You received this email because you just signed up for a new account. If it looks weird, <strong><a class="view" target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111">view it in your browser</a></strong>.</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:25px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#666666">If these emails get annoying, please feel free to&nbsp;<strong><a target="_blank" class="unsubscribe" href="" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111">unsubscribe</a></strong>.</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:25px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#666666">Ceej - 1234 Main Street - Anywhere, MA - 56789</p></td> 
                     </tr>  --}}
                    </tbody>
                   </table></td> 
                 </tr> 
                </tbody>
               </table></td> 
             </tr> 
            </tbody>
           </table></td> 
         </tr> 
        </tbody>
       </table> 

@stop


