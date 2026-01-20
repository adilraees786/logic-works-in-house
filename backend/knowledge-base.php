<?php
// backend/knowledge-base.php

class KnowledgeBase {
    private $knowledgeData;
    
    public function __construct() {
        $this->loadKnowledge();
    }
    
    private function loadKnowledge() {
        // Load knowledge from your .docx file content
        // This is a structured representation of your Q&A
        $this->knowledgeData = [
            'general' => [
                'services' => 'Logic Works offers comprehensive digital solutions including web development, mobile app development, AI solutions, digital marketing, branding, UI/UX design, and ongoing technical support.',
                'clients' => 'We work with startups, small to medium enterprises (SMEs), and large corporations across multiple industries worldwide.',
                'custom_solutions' => 'Yes, every solution is fully customized based on your specific business goals, target audience, and technical requirements.',
                'support' => 'Yes, we provide comprehensive maintenance, performance monitoring, security updates, and long-term technical support after project launch.',
                'consultation' => 'We offer free initial consultations to understand your needs and provide expert recommendations.'
            ],
            
            'web_development' => [
                'custom_websites' => 'Yes, we design and develop fully custom websites tailored to your brand identity and business objectives.',
                'mobile_friendly' => 'Absolutely! All our websites are fully responsive and optimized for mobile, tablet, and desktop devices.',
                'ecommerce' => 'Yes, we build secure eCommerce platforms with integrated payment gateways, inventory management, and order tracking systems.',
                'redesign' => 'Yes, we offer complete website redesign services including performance optimization, modern UI/UX, and technology upgrades.',
                'cms' => 'We work with various CMS platforms including WordPress, custom CMS solutions, and headless CMS architectures.',
                'timeline' => 'Website development typically takes 4-12 weeks depending on complexity, features, and content requirements.'
            ],
            
            'mobile_development' => [
                'mobile_apps' => 'Yes, we create custom native and hybrid mobile applications for both iOS and Android platforms.',
                'cross_platform' => 'Yes, we specialize in cross-platform development using React Native and Flutter for cost-effective solutions.',
                'web_applications' => 'Yes, we develop progressive web apps (PWAs), custom dashboards, SaaS platforms, and internal business tools.',
                'app_maintenance' => 'Yes, we provide continuous app support, bug fixes, feature updates, and performance optimization after launch.',
                'app_store' => 'Yes, we handle the complete app submission process for both Apple App Store and Google Play Store.'
            ],
            
            'ai_automation' => [
                'ai_solutions' => 'Yes, we build AI-powered applications, chatbots, recommendation engines, and intelligent automation systems.',
                'automation' => 'Our AI automation solutions reduce manual tasks, improve efficiency, and enable data-driven decision making.',
                'crm' => 'Yes, we develop custom AI-enhanced CRM systems for smarter customer relationship management and sales tracking.',
                'decision_making' => 'Yes, our AI analytics platforms transform raw data into actionable business insights and predictive analytics.',
                'machine_learning' => 'We implement machine learning models for pattern recognition, forecasting, and intelligent process automation.',
                'chatbots' => 'We create intelligent chatbots using GPT and other AI models for customer support, lead generation, and user engagement.'
            ],
            
            'digital_marketing' => [
                'seo' => 'Yes, we offer comprehensive SEO services including on-page optimization, technical SEO, link building, and content strategy. Results typically appear within 3-6 months.',
                'google_ads' => 'Yes, we manage high-ROI Google Ads campaigns with keyword research, ad creation, bid optimization, and conversion tracking.',
                'social_media' => 'Yes, we run targeted advertising campaigns on Facebook, Instagram, LinkedIn, and Twitter with audience segmentation.',
                'content' => 'Yes, we produce SEO-optimized blogs, website content, marketing copy, and content strategies aligned with your goals.',
                'local_seo' => 'Yes, we optimize for local searches, Google My Business, and regional targeting to attract nearby customers.',
                'reports' => 'Yes, we provide detailed monthly performance reports with analytics, insights, and recommendations.',
                'email_marketing' => 'We design email campaigns, automation sequences, and newsletter strategies to nurture leads and drive conversions.'
            ],
            
            'design' => [
                'ui_ux' => 'Yes, we design intuitive, user-friendly interfaces focused on user experience and conversion optimization.',
                'graphic_design' => 'Yes, we create logos, brand visuals, marketing materials, and creative assets for digital and print media.',
                'videos' => 'Yes, we produce motion graphics, explainer videos, product demos, and animated marketing content.',
                'conversion' => 'Our designs prioritize usability, accessibility, and conversion rate optimization based on user behavior research.',
                'testing' => 'Yes, we conduct usability testing, A/B testing, and iterative improvements based on user feedback.',
                'prototyping' => 'We create interactive prototypes and wireframes for validation before development begins.'
            ],
            
            'branding' => [
                'branding' => 'Yes, we develop complete brand strategies including positioning, messaging, visual identity, and brand guidelines.',
                'packages' => 'Yes, we offer comprehensive branding packages for startups, rebrands, and brand evolution projects.',
                'refresh' => 'Yes, we provide brand refresh services to modernize and strengthen existing brand identities.',
                'guidelines' => 'Yes, we deliver detailed brand style guides covering logo usage, colors, typography, and visual standards.',
                'materials' => 'Yes, we design business cards, brochures, banners, presentations, and all marketing collateral.',
                'logo' => 'We create memorable, scalable logos that represent your brand values and resonate with your audience.'
            ],
            
            'industries' => [
                'industries' => 'We serve healthcare, technology, education, travel & hospitality, real estate, eCommerce, finance, and non-profit sectors.',
                'specific_solutions' => 'Yes, we tailor digital solutions based on industry-specific requirements, regulations, and best practices.',
                'healthcare' => 'We develop HIPAA-compliant healthcare applications, patient portals, and telemedicine platforms.',
                'ecommerce' => 'We build scalable online stores with inventory management, multi-payment options, and analytics.',
                'education' => 'We create learning management systems (LMS), educational apps, and interactive e-learning platforms.'
            ],
            
            'getting_started' => [
                'start_project' => 'Simply contact us through our website, email, or chat. We\'ll schedule a free consultation to discuss your needs.',
                'consultation' => 'Yes, we provide a complimentary initial consultation to understand your requirements and propose solutions.',
                'timeline' => 'Project timelines vary based on scope and complexity. We provide detailed timelines after requirement analysis.',
                'process' => 'Our process includes: Discovery → Planning → Design → Development → Testing → Launch → Support.',
                'updates' => 'Yes, we provide regular progress updates, milestone reviews, and transparent communication throughout the project.',
                'involvement' => 'Absolutely! We encourage client collaboration at every stage with feedback loops and review sessions.',
                'agile' => 'Yes, we use agile methodologies for iterative development, faster delivery, and flexibility to adapt to changes.',
                'requirements' => 'We conduct thorough requirement gathering sessions to document your needs, goals, and success criteria.'
            ],
            
            'pricing' => [
                'cost' => 'Pricing depends on project scope, complexity, features, technology stack, and timeline. We provide custom quotes.',
                'flexible' => 'Yes, we offer flexible pricing models including fixed-price projects, hourly rates, and retainer agreements.',
                'quote' => 'Yes, we provide detailed, transparent quotes after understanding your specific requirements and objectives.',
                'hidden_charges' => 'No, all costs are discussed upfront with complete transparency. No hidden fees or surprise charges.',
                'payment' => 'We typically work with milestone-based payments aligned with project deliverables and progress.',
                'budget' => 'We work with various budgets and can recommend scalable solutions that fit your financial constraints.'
            ],
            
            'technology' => [
                'technologies' => 'We use modern tech stacks including React, Vue, Angular, Node.js, Python, PHP, React Native, Flutter, and cloud platforms.',
                'wordpress' => 'Yes, we develop and customize WordPress websites with custom themes, plugins, and advanced functionality.',
                'shopify' => 'Yes, we build Shopify stores and custom eCommerce solutions with payment integration and inventory systems.',
                'integration' => 'Yes, we integrate third-party APIs, payment gateways, CRMs, ERPs, and various business tools.',
                'performance' => 'Yes, we optimize for speed, SEO, Core Web Vitals, and overall performance using industry best practices.',
                'security' => 'We follow security best practices including encryption, secure authentication, data protection, and regular audits.',
                'ssl' => 'Yes, we configure SSL certificates, HTTPS, and implement comprehensive security measures.',
                'cloud' => 'We deploy on AWS, Google Cloud, Azure, and other cloud platforms for scalability and reliability.',
                'database' => 'We work with MySQL, PostgreSQL, MongoDB, Firebase, and other database technologies based on project needs.'
            ],
            
            'ppc_advertising' => [
                'platforms' => 'We manage campaigns on Google Ads, Facebook Ads, Instagram Ads, LinkedIn Ads, and other platforms.',
                'roi' => 'Yes, all campaigns are optimized for maximum ROI with conversion tracking, A/B testing, and continuous optimization.',
                'ad_cost' => 'Yes, we optimize targeting, bidding strategies, and ad quality to reduce cost per click and improve ad performance.',
                'remarketing' => 'We implement remarketing campaigns to re-engage visitors and increase conversion rates.',
                'reporting' => 'We provide detailed campaign reports with metrics, insights, and recommendations for improvement.'
            ],
            
            'social_media_services' => [
                'content_creation' => 'Yes, we create engaging social media posts, graphics, videos, and ad creatives tailored to each platform.',
                'management' => 'Yes, we handle complete social media management including posting, engagement, ads, and analytics.',
                'audience_growth' => 'We grow your audience through targeted campaigns, engagement strategies, and content optimization.',
                'strategy' => 'We develop comprehensive social media strategies aligned with your brand goals and target audience.',
                'influencer' => 'We can coordinate influencer partnerships and campaigns to expand your reach and credibility.'
            ],
            
            'ai_features' => [
                'personalization' => 'Yes, AI enables personalized content recommendations, product suggestions, and user experiences.',
                'chatbots' => 'Yes, we develop intelligent AI chatbots for customer support, lead qualification, and user assistance.',
                'support' => 'AI chatbots provide 24/7 automated support, instant responses, and can escalate complex queries to humans.',
                'prediction' => 'We implement predictive analytics for sales forecasting, customer behavior, and trend analysis.',
                'nlp' => 'We use natural language processing for sentiment analysis, content categorization, and intelligent search.'
            ],
            
            'hosting' => [
                'hosting_setup' => 'Yes, we assist with domain registration, hosting setup, server configuration, and DNS management.',
                'launch' => 'Yes, we manage smooth, secure launches with pre-launch testing, backup plans, and post-launch monitoring.',
                'post_launch' => 'Yes, we provide ongoing technical support, maintenance, updates, and performance optimization.',
                'migration' => 'We handle website migrations from other platforms with zero downtime and data integrity.',
                'backup' => 'We implement automated backup systems and disaster recovery plans to protect your data.'
            ],
            
            'trust' => [
                'why_choose' => 'We deliver innovative, scalable, and results-driven digital solutions with a proven track record of success.',
                'nda' => 'Yes, we sign non-disclosure agreements to ensure complete confidentiality and protection of your ideas.',
                'international' => 'Yes, we serve clients globally with remote collaboration tools and flexible communication.',
                'portfolio' => 'We have successfully delivered projects across various industries with measurable business impact.',
                'team' => 'Our team consists of experienced developers, designers, marketers, and project managers.',
                'guarantee' => 'We stand behind our work with quality guarantees and commitment to client satisfaction.'
            ],
            
            'company' => [
                'ceo' => 'Our CEO is Salman Waria, a visionary leader in digital innovation and technology solutions.',
                'website' => 'You can visit salmanwaria.com for more information about our leadership and company vision.',
                'name' => 'We are Logic Works - your partner in digital transformation and business growth.',
                'location' => 'We operate globally with a distributed team serving clients worldwide.',
                'contact' => 'You can reach us through our website contact form, email, or this chat for immediate assistance.'
            ]
        ];
    }
    
    public function search($query) {
        $query = strtolower($query);
        $results = [];
        $keywords = $this->extractKeywords($query);
        
        foreach ($this->knowledgeData as $category => $items) {
            foreach ($items as $key => $value) {
                $score = 0;
                
                // Check if query contains key terms
                foreach ($keywords as $keyword) {
                    if (stripos($key, $keyword) !== false) {
                        $score += 3; // Higher weight for key match
                    }
                    if (stripos($value, $keyword) !== false) {
                        $score += 1;
                    }
                }
                
                if ($score > 0) {
                    $results[] = [
                        'category' => $category,
                        'key' => $key,
                        'value' => $value,
                        'score' => $score
                    ];
                }
            }
        }
        
        // Sort by relevance score
        usort($results, function($a, $b) {
            return $b['score'] - $a['score'];
        });
        
        return array_slice($results, 0, 5); // Return top 5 matches
    }
    
    private function extractKeywords($query) {
        // Common stop words to ignore
        $stopWords = [
            'what', 'do', 'you', 'does', 'can', 'how', 'is', 'are', 'the', 'a', 'an', 
            'and', 'or', 'but', 'in', 'with', 'to', 'for', 'of', 'on', 'at', 'from', 
            'by', 'about', 'as', 'into', 'through', 'during', 'before', 'after', 
            'above', 'below', 'between', 'under', 'again', 'further', 'then', 'once', 
            'i', 'my', 'me', 'we', 'our', 'your', 'please', 'tell', 'want', 'need',
            'know', 'like', 'would', 'could', 'should', 'will', 'there', 'their'
        ];
        
        $words = preg_split('/\s+/', strtolower($query));
        $keywords = array_filter($words, function($word) use ($stopWords) {
            return strlen($word) > 2 && !in_array($word, $stopWords);
        });
        
        return array_values($keywords);
    }
    
    public function buildContext($searchResults) {
        if (empty($searchResults)) {
            return '';
        }
        
        $context = "Relevant information from Logic Works knowledge base:\n\n";
        foreach ($searchResults as $index => $result) {
            $context .= ($index + 1) . ". " . $result['value'] . "\n\n";
        }
        
        return $context;
    }
}
?>