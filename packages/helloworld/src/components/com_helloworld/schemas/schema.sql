# Here you can define any SQL you'd like to execute during package instillation
# Generally, you'll define any extra tables you're app my need
# The below SQL automatically assigns the Hello World app to People always
# This isn't necessary in most apps and assignments can be set in the Site Settings

INSERT INTO `#__nodes` (`type`, `component`, `name`, `access`) VALUES
('ComComponentsDomainEntityAssignment,com:components.domain.entity.assignment', 'com_helloworld', 'com:people.domain.entity.person', 1);