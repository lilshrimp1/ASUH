import { BaseAdminPaper } from './base-admin-paper';
import Typography from '@elementor/ui/Typography';
import { __ } from '@wordpress/i18n';
import Stack from '@elementor/ui/Stack';
import { ColumnLinkGroup } from '../linkGroup/column-link-group';
import PhotoIcon from '@elementor/icons/PhotoIcon';
import BrushIcon from '@elementor/icons/BrushIcon';
import UnderlineIcon from '@elementor/icons/UnderlineIcon';
import { useAdminContext } from '../../hooks/use-admin-context';

const linksIcons = {
	site_logo: PhotoIcon,
	site_colors: BrushIcon,
	site_fonts: UnderlineIcon,
};

export const QuickLinks = () => {
	const { adminSettings: { quickLinks = [] } = {} } = useAdminContext();

	return (
		<BaseAdminPaper>
			<Typography variant="h6" sx={ { color: 'text.primary' } }>{ __( 'Quick links', 'hello-biz' ) }</Typography>
			<Typography variant="body2" sx={ { mb: 3 } }>
				{ __( 'These quick actions will get your site airborne in a flash.', 'hello-biz' ) }
			</Typography>
			<Stack direction="row" gap={ 9 }>
				{ Object.keys( quickLinks ).map( ( key ) => {
					return (
						<ColumnLinkGroup key={ key } links={ [ { ...quickLinks[ key ], Icon: linksIcons[ key ] } ] } />
					);
				} ) }

			</Stack>
		</BaseAdminPaper>
	);
};
