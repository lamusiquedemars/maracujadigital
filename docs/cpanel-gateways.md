# Passerelles cPanel

Les domaines additionnels de cPanel pointent dans `public_html`, qui est la
release active de Maracuja Digital. Les deux passerelles ci-dessous doivent donc
faire partie de chaque release :

- `public/apps/atelierivoincidit/public` charge l'application Atelier Ivo
  Incidit située hors de la release Maracuja Digital ;
- `public/unviolondanslame.fr` charge Un violon dans l'âme au travers de son
  pointeur stable `apps/unviolondanslame/current/public`.

Ne pas retirer ces répertoires d'une archive ou d'une synchronisation de
déploiement. Leurs dossiers doivent être lisibles et traversables par Apache
(`755`) et leurs fichiers lisibles (`644`).
