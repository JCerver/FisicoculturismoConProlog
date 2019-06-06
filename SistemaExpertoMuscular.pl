

%Grupo muscular
musculo(pecho).
musculo(espalda).
musculo(hombro).
musculo(trapecio).
musculo(bicep).
musculo(tricep).
musculo(antebrazo).
musculo(abdomen).
musculo(cuadricep).
musculo(femoral).
musculo(gluteo).
musculo(pantorrilla).

%Musculos agonistas y antagonistas
antagonista(tricep,pecho).
antagonista(hombro,pecho).
antagonista(bicep,espalda).
antagonista(antebrazo,espalda).
antagonista(trapecio,hombro).
antagonista(tricep,bicep).
antagonista(bicep,tricep).
antagonista(femoral,cuadricep).
antagonista(gluteo,cuadricep).
antagonista(cuadricep,femoral).
antagonista(bicep,pecho).


%Division de musculo
tren_superior(pecho).
tren_superior(espalda).
tren_superior(hombro).
tren_superior(trapecio).
tren_superior(bicep).
tren_superior(tricep).
tren_superior(antebrazo).
tren_superior(abdomen).
tren_inferior(cuadricep).
tren_inferior(femoral).
tren_inferior(gluteo).
tren_inferior(pantorrilla).

%Ejercicios por musculo
ejercicio(pecho,press_banca).
ejercicio(pecho,press_inclinado).
ejercicio(pecho,press_declinado).
ejercicio(pecho,cruce_polea).
ejercicio(pecho,flexiones).

ejercicio(espalda,dominadas).
ejercicio(espalda,remo_barra).
ejercicio(espalda,remo_polea).
ejercicio(espalda,remo_mancuerna).
ejercicio(espalda,jalon_supino).
ejercicio(espalda,jalon_prono).
ejercicio(espalda,pullover).
ejercicio(espalda,peso_muerto).

ejercicio(hombro,press_militar).
ejercicio(hombro,elevaciones_laterales).
ejercicio(hombro,facepull).
ejercicio(hombro,press_arnold).

ejercicio(trapecio,encogimientos).
ejercicio(trapecio,remo_menton).
ejercicio(trapecio,press_militar).
ejercicio(trapecio,paseo_granjero).

ejercicio(bicep,curl_barra).
ejercicio(bicep,curl_mancuerna).
ejercicio(bicep,curl_mancuerna_declinado).
ejercicio(bicep,curl_concentrado).
ejercicio(bicep,curl_polea).

ejercicio(tricep,fondos_paralela).
ejercicio(tricep,fondos_banco).
ejercicio(tricep,extensiones_polea).
ejercicio(tricep,extensiones_mancuerna).
ejercicio(tricep,rompecraneos).

ejercicio(antebrazo,flexiones_agarre_prono).
ejercicio(antebrazo,flexiones_agarre_supino).
ejercicio(antebrazo,flexiones_agarre_neutro).

ejercicio(abdomen,crunch).
ejercicio(abdomen,planchas).
ejercicio(abdomen,rueda_abdominal).
ejercicio(abdomen,bicicleta).
ejercicio(abdomen,flexion_v).
ejercicio(abdomen,crunch).
ejercicio(abdomen,levantamientos_pierna).
ejercicio(abdomen,escaladora).
ejercicio(abdomen,tijeras).

ejercicio(cuadricep,sentadilla_libre).
ejercicio(cuadricep,sentadilla_maquina_smith).
ejercicio(cuadricep,zancadas).
ejercicio(cuadricep,extension_pierna).
ejercicio(cuadricep,sentadilla_frontal).
ejercicio(cuadricep,prensa).
ejercicio(cuadricep,sentadilla_sissy).

ejercicio(femoral,peso_muerto_rumano).
ejercicio(femoral,buenos_dias).
ejercicio(femoral,desplantes).
ejercicio(femoral,curl_femoral_parado).
ejercicio(femoral,curl_femoral_acostado).
ejercicio(femoral,prensa_vertical).

ejercicio(gluteo,hip_thrust).
ejercicio(gluteo,bandas_elasticas).
ejercicio(gluteo,puentes_aconstado).
ejercicio(gluteo,levantamiento_lateral_pierna).
ejercicio(gluteo,tablon_diagonal).
ejercicio(gluteo,elevacion_cadera).

ejercicio(pantorrilla,elevacion_talones).
ejercicio(pantorrilla,elevacion_talones_prensa).
ejercicio(pantorrilla,elevacion_talones_sentado).
ejercicio(pantorrilla,elevacion_escaleras).
ejercicio(pantorrilla,sentadilla_saltos).

rutina(fuerza).
rutina(hipertrofia).
rutina(push).
rutina(pull).
rutina(leg).
rutina(resistencia).

%Reglas
entrenamiento_fuerza(Repeticiones) :- (Repeticiones=<5).
entrenamiento_hipertrofia(Repeticiones) :- ((Repeticiones>=6), (Repeticiones=<12)).
entrenamiento_resistencia(Repeticiones) :- (Repeticiones>=13).







