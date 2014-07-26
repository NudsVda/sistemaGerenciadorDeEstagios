

# Exporta base em yaml (gera arquivos em metadados)
php app/console doctrine:mapping:convert yaml ./src/IFC/IfcBundle/Resources/config/doctrine/metadata/orm --from-database --force

# Cria classes de entidade
php app/console doctrine:mapping:import IFCIfcBundle annotation
php app/console doctrine:generate:entities IFCIfcBundle

